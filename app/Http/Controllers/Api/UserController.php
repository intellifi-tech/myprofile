<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\User;
use App\UserAttendedEvent;
use App\UserLikeActivity;
use App\UserPrivacySettings;
use Carbon\Carbon;
use http\Env;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PharIo\Manifest\Url;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show(Request $request)
    {
        $user = User::where('api_token', $request->header('api-token'))->first();
        return response()->json($user);
    }

    public function update(Request $request)
    {
        $user = User::where('api_token', $request->header('api-token'))->first();

        //region Profil Fotoğrafı Yükleme
        $path = public_path('uploads/profile/');
        $profileImage = $request->profile_image;  // your base64 encoded
        $profileImage = str_replace('data:image/png;base64,', '', $profileImage);
        $profileImage = str_replace(' ', '+', $profileImage);
        $profileImageName = remove_turkish(lower_case_turkish($request->name.'-'.$request->surname)).chr(rand(65, 90)).chr(rand(65, 90)).rand(10, 99).'.'.'png';
        \File::put($path. '/' . $profileImageName, base64_decode($profileImage));
        // endregion

        //region Kapak Fotoğrafı Yükleme
        $path = public_path('uploads/cover/');
        $coverImage = $request->cover_image;  // your base64 encoded
        $coverImage = str_replace('data:image/png;base64,', '', $coverImage);
        $coverImage = str_replace(' ', '+', $coverImage);
        $coverImageName = remove_turkish(lower_case_turkish($request->name.'-'.$request->surname)).chr(rand(65, 90)).chr(rand(65, 90)).rand(10, 99).'.'.'png';
        \File::put($path. '/' . $coverImageName, base64_decode($coverImage));
        // endregion

        $user->profile_photo = $profileImageName;
        $user->cover_photo = $coverImageName;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()){
            $json['status'] = 200;
            $json['message'] = "Kayıt başarılı";
            $json['user'] = $user;
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function register(Request $request)
    {
        if ($request->name && $request->surname && $request->email && $request->password) {
            $user = new User();
            $user->type = 1;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->api_token = Str::random(60);
            $user->save();

            $userPrivacy = new UserPrivacySettings();
            $userPrivacy->user_id = $user->id;
            $userPrivacy->visibility_on_the_map = 0;
            $userPrivacy->no_message = 0;
            $userPrivacy->no_follow_up_request = 0;
            $userPrivacy->save();

            if ($user->save()){
                return response()->json([
                    'status' => 200,
                    'message' => 'Success',
                    'api_token' => $user->api_token,
                    'id' => $user->id,
                    'profile_photo' => $user->profile_photo,
                    'cover_photo' => $user->cover_photo,
                    'title' => $user->title,
                    'name' => $user->name,
                    'surname' => $user->surname,
                    'career_history' => $user->career_history,
                    'short_biography' => $user->short_biography,
                    'credentials' => $user->credentials,
                    'date_of_birth' => $user->date_of_birth,
                    'company_id' => $user->company_id,
                    'sector_id' => $user->sector_id,
                    'email' => $user->email,
                    'visibility_on_the_map' => $userPrivacy->visibility_on_the_map,
                    'no_message' => $userPrivacy->no_message,
                    'no_follow_up_request' => $userPrivacy->no_follow_up_request,
                ], 200, [], JSON_UNESCAPED_UNICODE);
            }
        }else{
            $json['status'] = 0;
            $json['message'] = "Adı, Soyadı, E-Mail ve Şifre zorunludur.";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user->type == 1){
            if ($request->email && $request->password){
                $user = User::where([
                    ['email', $user->email],
                    ['type', 1]
                ])->first();
                if ($user){
                    $check = Hash::check($request->password, $user->password);
                    if ($check == false){
                        $json['status'] = 0;
                        $json['message'] = "Giriş başarısız. Şifre yanlış.";
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }else{
                        return response()->json([
                            'status' => 200,
                            'message' => 'Giriş yapıldı.',
                            'api_token' => $user->api_token,
                            'id' => $user->id,
                            'profile_photo' => $user->profile_photo,
                            'cover_photo' => $user->cover_photo,
                            'title' => $user->title,
                            'name' => $user->name,
                            'surname' => $user->surname,
                            'career_history' => $user->career_history,
                            'short_biography' => $user->short_biography,
                            'credentials' => $user->credentials,
                            'date_of_birth' => $user->date_of_birth,
                            'company_id' => $user->company_id,
                            'sector_id' => $user->sector_id,
                            'email' => $user->email,
                        ], 200, [], JSON_UNESCAPED_UNICODE);
                    }
                }else{
                    $json['status'] = 0;
                    $json['message'] = "Giriş başarısız. Böyle bir kullanıcı yok.";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }
            }else{
                $json['status'] = 0;
                $json['message'] = "Kullanıcı adı ve şifre boş olamaz.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        }else{
            $json['status'] = 0;
            $json['message'] = "Kullanıcı erişim izni yok.";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function userAttendedEvent(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->title && $request->latitude && $request->latitude && $request->event_image) {

                    $event = new Event();
                    $event->title = $request->title;
                    $event->latitude = $request->latitude;
                    $event->longitude = $request->longitude;
                    $event->save();

                    $userAttendedEvent = new UserAttendedEvent();
                    $userAttendedEvent->event_id = $event->id;
                    $userAttendedEvent->user_id = $user->id;
                    $userAttendedEvent->event_description = $request->event_description;

                    //region Etkinlik Fotoğrafı Yükleme
                    $path = public_path('uploads/events/');
                    $eventImage = $request->event_image;  // your base64 encoded
                    $eventImage = str_replace('data:image/png;base64,', '', $eventImage);
                    $eventImage = str_replace(' ', '+', $eventImage);
                    $eventImageName = str_replace(' ', '-', remove_turkish(lower_case_turkish($request->title))).'.'.'png';
                    \File::put($path . $eventImageName, base64_decode($eventImage));
                    // endregion

                    $userAttendedEvent->event_image = $eventImageName;
                    $userAttendedEvent->date_of_participation = Carbon::now();
                    $userAttendedEvent->save();

                    $json['status'] = 200;
                    $json['message'] = "Success";
                    $json['userAttendedEvent'] = $userAttendedEvent;
                    $json['userAttendedEvent']['event'] = $event;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 204;
                    $json['message'] = "Etkinlik ID, etkinlik açıklaması, etkinlik resmi, katılım tarihi boş olamaz.";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }
            } else {
                $json['status'] = 0;
                $json['message'] = "api-token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "api-token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function userAttendedEvents(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $activities = UserAttendedEvent::where('user_id', $user->id)->with(['event', 'user'])->get();

                $json['status'] = 200;
                $json['message'] = "Success";
                $json['activities'] = $activities;
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            } else {
                $json['status'] = 204;
                $json['message'] = "api-token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 204;
            $json['message'] = "api-token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function userPrivacySettings(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {

                $userPrivacy = UserPrivacySettings::where('user_id', $user->id)->with(['user'])->first();
                $userPrivacy->visibility_on_the_map = $request->visibility_on_the_map;
                $userPrivacy->no_message = $request->no_message;
                $userPrivacy->no_follow_up_request = $request->no_follow_up_request;
                $userPrivacy->save();

                $json['status'] = 200;
                $json['message'] = "Success";
                $json['userPrivacy'] = $userPrivacy;
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            } else {
                $json['status'] = 0;
                $json['message'] = "api-token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "api-token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function likeActivity(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->attended_id) {
                    $likeActivity = new UserLikeActivity();
                    $likeActivity->user_id = $user->id;
                    $likeActivity->attended_id = $request->attended_id;
                    $likeActivity->save();

                    $userAttendedEvents = UserAttendedEvent::find($request->attended_id);
                    $userAttendedEvents->rating = $userAttendedEvents->rating + 1;
                    $userAttendedEvents->save();

                    $json['status'] = 200;
                    $json['message'] = "Success";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 204;
                    $json['message'] = "Etkinlik ID boş olamaz";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }
            } else {
                $json['status'] = 0;
                $json['message'] = "Api_token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "Api token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function idEvents(Request $request, $user_id){
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($user_id) {
                    $userAttendedEvents = UserAttendedEvent::where('user_id', $user_id)->with(['event'])->get();
                    if ($userAttendedEvents->count() > 0){
                        $json['status'] = 200;
                        $json['message'] = "Success";
                        $json['userAttendedEvents'] = $userAttendedEvents;
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }else{
                        return response()->json(null, 404, [], JSON_UNESCAPED_UNICODE);
                    }
                } else {
                    $json['status'] = 204;
                    $json['message'] = "Kullanıcı ID boş olamaz";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }
            } else {
                $json['status'] = 0;
                $json['message'] = "Api_token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "Api token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }
}