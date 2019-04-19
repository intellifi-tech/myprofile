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
        //
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
        $user = new User();

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
}
