<?php

namespace App\Http\Controllers\Api;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function newMessage(Request $request)
    {
        if ($request->api_token) {
            $user = User::where('api_token', $request->api_token)->first();
            if ($user) {
                if ($request->from_user_id && $request->to_user_id && $request->message) {
                    $message = new Message();
                    $message->type = 0;
                    $message->parent_id = null;
                    $message->from_user_id = $user->id;
                    $message->to_user_id = $request->to_user_id;
                    $message->message = $request->message;
                    $message->save();

                    $json['status'] = 1;
                    $json['message'] = "Success";
                    $json['message'] = $message;
                    $json['api_token'] = $user->api_token;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Gönderen, alan ya da mesaj boş olamaz.";
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

    public function answerMessage(Request $request)
    {
        if ($request->api_token) {
            $user = User::where('api_token', $request->api_token)->first();
            if ($user) {
                if ($request->from_user_id && $request->to_user_id && $request->message) {
                    $message = new Message();
                    $message->type = 1;
                    $message->parent_id = $request->parent_id;
                    $message->from_user_id = $user->id;
                    $message->to_user_id = $request->to_user_id;
                    $message->message = $request->message;
                    $message->save();

                    $json['status'] = 1;
                    $json['message'] = "Success";
                    $json['message'] = $message;
                    $json['api_token'] = $user->api_token;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Gönderen, alan ya da mesaj boş olamaz.";
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
