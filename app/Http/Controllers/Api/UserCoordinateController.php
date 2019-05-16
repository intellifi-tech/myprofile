<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\UserCoordinate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserCoordinateController extends Controller
{
    public function setCoordinates(Request $request)
    {
        if ($request->api_token) {
            $user = User::where('api_token', $request->api_token)->first();
            if ($user) {
                if ($request->latitude && $request->longitude) {
                    $userCoordination = new UserCoordinate();
                    $userCoordination->user_id = $user->id;
                    $userCoordination->latitude = $request->latitude;
                    $userCoordination->longitude = $request->longitude;
                    $userCoordination->save();
                    $json['status'] = 1;
                    $json['message'] = "Success";
                    $json['userCoordination'] = $userCoordination;
                    $json['api_token'] = $user->api_token;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Enlem ve boylam boş olamaz.";
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

    public function nearbyUsers(Request $request)
    {
        if ($request->api_token) {
            $user = User::where('api_token', $request->api_token)->first();
            if ($user) {
                if ($request->latitude && $request->longitude) {

                    $coordinates = UserCoordinate::all();
                    return response()->json($coordinates, 200, [], JSON_UNESCAPED_UNICODE);
//                    for ($i = 0; $coordinates->count() > $i; $i++){
//                        distance($request->latitude, $request->longitude, $coordinates->latitude, $coordinates->longitude, "M");
//                        $user = UserCoordinate::where('latitude', $request->latitude)->where('longitude', $request->longitude)->first();
//                    }


//                    $json['status'] = 1;
//                    $json['message'] = "Success";
//                    $json['api_token'] = $user->api_token;
//                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Enlem ve boylam boş olamaz.";
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