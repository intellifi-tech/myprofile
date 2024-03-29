<?php

namespace App\Http\Controllers\Api;

use App\Togetherness;
use App\TogethernessComment;
use App\TogethernessUser;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TogethernessController extends Controller
{
    public function getAllTogetherness(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $togetherness = Togetherness::orderBy('id', 'DESC')->with(['togethernessUsers', 'togethernessComments'])->limit(200)->get();
                return response()->json($togetherness, 200, [], JSON_UNESCAPED_UNICODE);
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

    public function addTogetherness(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {

                $togetherness = new Togetherness();
                $togetherness->user_id = $user->id;
                $togetherness->description = $request->description;
                //region Etkinlik Fotoğrafı Yükleme
                $path = public_path('uploads/togetherness/');
                $togetherness_image = $request->togetherness_image;  // your base64 encoded
                $togetherness_image = str_replace('data:image/png;base64,', '', $togetherness_image);
                $togetherness_image = str_replace(' ', '+', $togetherness_image);
                $togethernessImageName = str_replace(' ', '-', remove_turkish(lower_case_turkish($request->description))) . chr(rand(65, 90)) . chr(rand(65, 90)) . rand(10, 99) . '.' . 'png';
                \File::put($path . $togethernessImageName, base64_decode($togetherness_image));
                // endregion

                $togetherness->photo = "https://demo.intellifi.tech/demo/MyProfile/web/public/uploads/togetherness/" . $togethernessImageName;
                $togetherness->save();

                $with_whom_users = explode(',', $request->with_whom_users);

                foreach ($with_whom_users as $with_whom_user){
                    $togethernessUsers = new TogethernessUser();
                    $togethernessUsers->togetherness_id = $togetherness->id;
                    $togethernessUsers->with_whom_user_id = $with_whom_user;
                    $togethernessUsers->save();
                }
                return response()->json($togetherness, 200, [], JSON_UNESCAPED_UNICODE);
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

    public function likeTogetherness(Request $request, $togethernessId)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {

                $togetherness = Togetherness::find($togethernessId);
                $togetherness->rating = $togetherness->rating + 1;
                $togetherness->save();

                return response()->json(null, 200, [], JSON_UNESCAPED_UNICODE);
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

    public function showTogetherness(Request $request, $togethernessId)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $togetherness = Togetherness::where('id', $togethernessId)->with(['togethernessUsers'])->withCount('togethernessUsers')->first();
                return response()->json($togetherness, 200, [], JSON_UNESCAPED_UNICODE);
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

    public function updateTogetherness(Request $request, $togethernessId)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {

                $togetherness = Togetherness::find($togethernessId);
                $togetherness->user_id = $user->id;
                $togetherness->description = $request->description;

                if ($togetherness->photo != $request->togetherness_image){
                    unlink($togetherness->photo);
                    //region Etkinlik Fotoğrafı Yükleme
                    $path = public_path('uploads/togetherness/');
                    $togetherness_image = $request->togetherness_image;  // your base64 encoded
                    $togetherness_image = str_replace('data:image/png;base64,', '', $togetherness_image);
                    $togetherness_image = str_replace(' ', '+', $togetherness_image);
                    $togethernessImageName = str_replace(' ', '-', remove_turkish(lower_case_turkish($request->description))) . chr(rand(65, 90)) . chr(rand(65, 90)) . rand(10, 99) . '.' . 'png';
                    \File::put($path . $togethernessImageName, base64_decode($togetherness_image));
                    // endregion

                    $togetherness->photo = "https://demo.intellifi.tech/demo/MyProfile/web/public/uploads/togetherness/" . $togethernessImageName;
                }

                $togetherness->save();

                $with_whom_users = explode(',', $request->with_whom_users);

                TogethernessUser::where('togetherness_id', $togethernessId)->delete();

                foreach ($with_whom_users as $with_whom_user){
                    $togethernessUsers = new TogethernessUser();
                    $togethernessUsers->togetherness_id = $togetherness->id;
                    $togethernessUsers->with_whom_user_id = $with_whom_user;
                    $togethernessUsers->save();
                }
                return response()->json($togetherness, 200, [], JSON_UNESCAPED_UNICODE);
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

    public function addComment(Request $request, $togethernessId)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {

                $togethernessComment = new TogethernessComment();
                $togethernessComment->togetherness_id = $togethernessId;
                $togethernessComment->user_id = $user->id;
                $togethernessComment->comment = $request->comment;
                $togethernessComment->save();

                return response()->json($togethernessComment, 200, [], JSON_UNESCAPED_UNICODE);
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
}
