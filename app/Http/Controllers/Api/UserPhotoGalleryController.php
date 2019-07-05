<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\UserPhotoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserPhotoGalleryController extends Controller
{
    public function indexPhotos(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $userPhotos = UserPhotoGallery::get();
                if ($userPhotos->count() > 0){
                    return response()->json($userPhotos, 200, [], JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json(null, 404, [], JSON_UNESCAPED_UNICODE);
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

    public function addPhoto(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $userPhotoGallery = new UserPhotoGallery();
                $userPhotoGallery->user_id = $user->id;

                //region Kullanıcı Galeri Fotoğrafı Yükleme
                $path = public_path('uploads/user-photos/');
                $photo = $request->photo;  // your base64 encoded
                $photo = str_replace('data:image/png;base64,', '', $photo);
                $photo = str_replace(' ', '+', $photo);
                $photoImageName = lower_case_turkish(str_replace(" ", "", $user->name)) . chr(rand(65, 90)).chr(rand(65, 90)).rand(10, 99).'.'.'png';
                \File::put($path. '/' . $photoImageName, base64_decode($photo));
                // endregion

                $userPhotoGallery->photo_name = user_photo_image_path() . $photoImageName;
                $userPhotoGallery->save();
                return response()->json($userPhotoGallery, 200, [], JSON_UNESCAPED_UNICODE);
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
