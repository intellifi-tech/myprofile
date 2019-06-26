<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\UserLikeActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserActivityController extends Controller
{
    public function likesActivity(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->attended_id) {
                    $likesActivity = UserLikeActivity::where('attended_id', $request->attended_id)->with(['user'])->get();

                    $json['status'] = 200;
                    $json['message'] = "Success";
                    $json['users'] = $likesActivity;
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
}
