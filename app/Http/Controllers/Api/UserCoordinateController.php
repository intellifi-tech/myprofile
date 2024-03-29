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
            $user = User::where('api_token', $request->header('api-token'))->with(['userPrivacy'])->first();
            if ($user) {
                if ($request->latitude && $request->longitude) {
                    $userCoordinate = UserCoordinate::where('user_id',$user->id)->delete();

                    if ($user->userPrivacy->visibility_on_the_map == 0){
                        $userCoordination = new UserCoordinate();
                        $userCoordination->user_id = $user->id;
                        $userCoordination->latitude = $request->latitude;
                        $userCoordination->longitude = $request->longitude;
                        $userCoordination->save();
                        $json['status'] = 200;
                        $json['message'] = "Success";
                        $json['userCoordination'] = $userCoordination;
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }else{
                        $json['status'] = 204;
                        $json['message'] = "Kullanıcı harita izni yok.";
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }

                } else {
                    $json['status'] = 0;
                    $json['message'] = "Enlem ve boylam boş olamaz.";
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
                        if ($distance != null){
                            array_push($nearbyUserCoordinates, $distance);
                        }
                    }
                    $nearbyUserCoordinates = array_filter($nearbyUserCoordinates);
                    if(count($nearbyUserCoordinates) > 0){
                        $json['status'] = 200;
                        $json['message'] = "Success";
                        $json['nearbyUserCoordinates'] = $nearbyUserCoordinates;
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }else{
                        $json['status'] = 204;
                        $json['message'] = "No Content";
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Enlem ve boylam boş olamaz.";
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
}
