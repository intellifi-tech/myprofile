<?php

namespace App\Http\Controllers\Api;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function getMessages(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $messages = Message::where('end_message', 1)->where('from_user_id', $user->id)->orWhere('to_user_id', $user->id)->with(['fromUser', 'toUser'])->get();

                if ($messages->count() > 0){
                    $json['status'] = 200;
                    $json['message'] = "Success";
                    $json['messages'] = $messages;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
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

    public function sendMessage(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->to_user_id && $request->message) {

                    $toUser = User::where('id', $request->to_user_id)->with(['userPrivacy'])->first();
                    if ($toUser->userPrivacy->no_message == 0){
                        Message::where('from_user_id', $user->id)->where('to_user_id', $request->to_user_id)->update('end_message', 0);
                        Message::where('from_user_id', $request->to_user_id)->where('to_user_id', $user->id)->update('end_message', 0);
                        $message = new Message();
                        $message->from_user_id = $user->id;
                        $message->to_user_id = $request->to_user_id;
                        $message->message = $request->message;
                        $message->status = 0;
                        $message->end_message = 1;
                        $message->save();

                        $json['status'] = 200;
                        $json['message'] = "Success";
                        $json['object'] = $message;
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }else{
                        $json['status'] = 204;
                        $json['message'] = "Mesaj göndermeye çalıştığınız kullanıcı mesaj kabul etmiyor.";
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Gönderen, alan ya da mesaj boş olamaz.";
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

    public function answerMessage(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->to_user_id && $request->message) {
                    Message::where('from_user_id', $user->id)->where('to_user_id', $request->to_user_id)->update('end_message', 0);
                    Message::where('from_user_id', $request->to_user_id)->where('to_user_id', $user->id)->update('end_message', 0);
                    $message = new Message();
                    $message->parent_id = $request->parent_id;
                    $message->from_user_id = $user->id;
                    $message->to_user_id = $request->to_user_id;
                    $message->message = $request->message;
                    $message->status = 0;
                    $message->end_message = 1;
                    $message->save();

                    $json['status'] = 200;
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
                $json['message'] = "api-token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "api-token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function userIndexMessages(Request $request, $userId)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $messages = Message::where('from_user_id', $userId)->orWhere('to_user_id', $userId)->get();

                if ($messages->count() > 0){
                    $json['status'] = 200;
                    $json['message'] = "Success";
                    $json['messages'] = $messages;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
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
}
