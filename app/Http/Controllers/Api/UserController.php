<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($api_token)
    {
        $user = User::where('api_token', $api_token)->first();
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $api_token)
    {
        $user = User::where('api_token', $api_token)->first();

        //region Profil Fotoğrafı Yükleme
        $path = public_path('uploads/profile/');
        $profileImage = $request->profile_image;  // your base64 encoded
        $profileImage = str_replace('data:image/png;base64,', '', $profileImage);
        $profileImage = str_replace(' ', '+', $profileImage);
        $profileImageName = remove_turkish(lower_case_turkish($request->name.'-'.$request->surname)).'.'.'png';
        \File::put($path. '/' . $profileImageName, base64_decode($profileImage));
        // endregion

        //region Kapak Fotoğrafı Yükleme
        $path = public_path('uploads/cover/');
        $coverImage = $request->cover_image;  // your base64 encoded
        $coverImage = str_replace('data:image/png;base64,', '', $coverImage);
        $coverImage = str_replace(' ', '+', $coverImage);
        $coverImageName = remove_turkish(lower_case_turkish($request->name.'-'.$request->surname)).'.'.'png';
        \File::put($path. '/' . $coverImageName, base64_decode($coverImage));
        // endregion

        $user->profile_photo = $profileImageName;
        $user->cover_photo = $coverImageName;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()){
            $json['status'] = 1;
            $json['message'] = "Kayıt başarılı";
            $json['user'] = $user;
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request)
    {
        if ($request->name && $request->surname && $request->email && $request->password) {
            $user = new User();
            $user->type = 0;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->api_token = Str::random(60);
            if ($user->save()){
                $json['status'] = 1;
                $json['message'] = "Kullanıcı oluşturuldu.";
                $json['user'] = $user;
                $json['api_token'] = $user->api_token;
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
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
                        $json['status'] = 1;
                        $json['message'] = "Giriş başarılı.";
                        $json['user'] = $user;
                        $json['api_token'] = $user->api_token;
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
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
}
