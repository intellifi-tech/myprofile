<?php

namespace App\Http\Controllers\Api;

use App\Follow;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserFollowController extends Controller
{
    public function followers(Request $request)
    {
        if ($request->header('api_token')) {
            $user = User::where('api_token', $request->header('api_token'))->first();
            if ($user) {
                $followers = Follow::where('to_user_id', $user->id)->with(['myFollowers'])->get();

                $json['status'] = 200;
                $json['message'] = "Success";
                $json['followers'] = $followers;
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

    public function follow(Request $request)
    {
        if ($request->header('api_token')) {
            $user = User::where('api_token', $request->header('api_token'))->first();
            if ($user) {
                if ($request->to_user_id) {
                    $follow = new Follow();
                    $follow->from_user_id = $user->id;
                    $follow->to_user_id = $request->to_user_id;
                    $follow->save();

                    $json['status'] = 200;
                    $json['message'] = "Success";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Takip edilecek kişi ID zorunludur.";
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

    public function stopFollowing(Request $request)
    {
        if ($request->header('api_token')) {
            $user = User::where('api_token', $request->header('api_token'))->first();
            if ($user) {
                if ($request->to_user_id) {
                    Follow::where('from_user_id' , $user->id)->where('to_user_id', $request->to_user_id)->delete();

                    $json['status'] = 200;
                    $json['message'] = "Success";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Takipten çıkarılacak kişi ID zorunludur.";
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
