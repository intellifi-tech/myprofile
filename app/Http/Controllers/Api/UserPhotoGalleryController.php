<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\UserPhotoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPhotoGalleryController extends Controller
{
    public function addPhoto(Request $request)
    {
        if ($request->header('api_token')) {
            $user = User::where('api_token', $request->header('api_token'))->first();
            if ($user) {
                $userPhotoGallery = new UserPhotoGallery();
                $userPhotoGallery->user_id = $user->id;

                //region Kullanıcı Galeri Fotoğrafı Yükleme
                $path = public_path('uploads/user-photos/');
                $userPhoto = $request->photo;  // your base64 encoded
                $userPhoto = str_replace('data:image/png;base64,', '', $userPhoto);
                $userPhoto = str_replace(' ', '+', $userPhoto);
                $userPhotoName = $user->name . Str::random(5) .'.'.'png';
                \File::put($path. '/' . $userPhotoName, base64_decode($userPhoto));
                // endregion

                $userPhotoGallery->photo_name = $userPhotoName;
                $userPhotoGallery->save();

                $json['status'] = 200;
                $json['message'] = "Success";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
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
