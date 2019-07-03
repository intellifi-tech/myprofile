<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\User;
use App\UserAttendedEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $events = Event::orderBy('created_at', 'DESC')->limit(100)->get();
                dd($events);
                if ($events->count() > 0){
                    $json['status'] = 200;
                    $json['message'] = "Success";
                    $json['events'] = $events;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }else{
                    $json['status'] = 204;
                    $json['message'] = "No Content";
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }
            } else {
                $json['status'] = 0;
                $json['message'] = "Etkinlikler çekilemedi. Api_token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "api-token boş olamaz";
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

                    $json['status'] = 200;
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
                $json['message'] = "api-token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "api-token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function searchEvent(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->title && $request->latitude && $request->longitude && $request->meterLimit) {
                    $events = Event::where('title', 'LIKE', '%' . $request->title . '%')->get();

                    if ($events->count() > 0){
                        $nearbyEvents = [];
                        foreach ($events as $event){
                            $nearbyEvent = $this->distanceEvent($request->latitude, $request->longitude, $event->latitude, $event->longitude, "M", $request->meterLimit, $event);
                            if (!is_null($nearbyEvent)){
                                array_push($nearbyEvents, $nearbyEvent);
                            }
                        }

                        if (count($nearbyEvents) > 0){
                            $json['status'] = 200;
                            $json['message'] = "Success";
                            $json['nearbyEvent'] = $nearbyEvents;
                            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                        }else{
                            $json['status'] = 204;
                            $json['message'] = "No content";
                            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                        }
                    }else{
                        $json['status'] = 204;
                        $json['message'] = "No content";
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Etkinlik adı, enlem, boylam veya mesafe boş olamaz.";
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

    public function distanceEvent($lat1, $lon1, $lat2, $lon2, $unit, $meterLimit, $event)
    {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        } else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
                return ($miles * 1.609344);
            } else if ($unit == "N") {
                return ($miles * 0.8684);
            } else if ($unit == "M") {
                if ((($miles * 1.609344) * 1000) < $meterLimit)
                {
                    $coords["event"] = $event;
                    $coords["lat"] = $lat2;
                    $coords["lon"] = $lon2;
                    $coords["eventDistance"] = round((($miles * 1.609344) * 1000));
                    return $coords;
                }
            } else {
                return $miles;
            }
        }
    }

    public function nearbyEvents(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                if ($request->latitude && $request->longitude && $request->meterLimit) {
                    $events = Event::all();

                    if ($events->count() > 0){
                        $nearbyEvents = [];
                        foreach ($events as $event){
                            $nearbyEvent = $this->distanceEvent($request->latitude, $request->longitude, $event->latitude, $event->longitude, "M", $request->meterLimit, $event);
                            if (!is_null($nearbyEvent)){
                                array_push($nearbyEvents, $nearbyEvent);
                            }
                        }

                        if (count($nearbyEvents) > 0){
                            $json['status'] = 200;
                            $json['message'] = "Success";
                            $json['nearbyEvent'] = $nearbyEvents;
                            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                        }else{
                            $json['status'] = 204;
                            $json['message'] = "No content";
                            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                        }
                    }else{
                        $json['status'] = 204;
                        $json['message'] = "No content";
                        return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                    }
                } else {
                    $json['status'] = 0;
                    $json['message'] = "Etkinlik adı, enlem, boylam veya mesafe boş olamaz.";
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
