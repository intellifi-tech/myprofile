<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $events = Event::all();
                $json['status'] = 1;
                $json['events'] = $events;
                $json['api_token'] = $user->api_token;
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            } else {
                $json['status'] = 0;
                $json['message'] = "Etkinlikler çekilemedi. Api_token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "Api token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function create(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->name && $request->activity_date) {
                    $event = new Event();
                    $event->name = $request->name;
                    $event->activity_date = $request->activity_date;
                    $event->save();

                    $json['status'] = 1;
                    $json['message'] = "Success";
                    $json['event'] = $event;
                    $json['api_token'] = $user->api_token;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Etkinlik adı veya tarihi boş olamaz.";
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

    public function show(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->id) {
                    $event = Event::with(['comments'])->find($request->id);

                    $json['status'] = 1;
                    $json['message'] = "Success";
                    $json['event'] = $event;
                    $json['api_token'] = $user->api_token;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Etkinlik id boş olamaz.";
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

    public function update(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->name && $request->activity_date) {

                    $event = Event::find($request->id);
                    $event->name = $request->name;
                    $event->activity_date = $request->activity_date;
                    $event->save();

                    $json['status'] = 1;
                    $json['message'] = "Etkinlik oluşturuldu.";
                    $json['event'] = $event;
                    $json['api_token'] = $user->api_token;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Etkinlik adı veya tarihi boş olamaz.";
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
