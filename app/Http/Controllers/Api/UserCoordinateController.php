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
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->latitude && $request->longitude) {
                    $userCoordinate = UserCoordinate::where('user_id',$user->id)->delete();
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
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->latitude && $request->longitude) {
                    $nearbyUserCoordinates = [];
                    $coordinates = UserCoordinate::all();
                    foreach ($coordinates as $coordinate){
                        $distance = distance($request->latitude, $request->longitude, $coordinate->latitude, $coordinate->longitude, "M", $request->meterLimit, $coordinate->user);
                        array_push($nearbyUserCoordinates, $distance);
                    }
//                    $nearbyUserCoordinates = array_filter($nearbyUserCoordinates);
                    foreach ($nearbyUserCoordinates as $indis => $value){
                        if ($value == ""){
                            unset($nearbyUserCoordinates[$indis]);
                        }
                    }
                    $json['status'] = 1;
                    $json['message'] = "Success";
                    $json['nearbyUserCoordinates'] = $nearbyUserCoordinates;
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
}
