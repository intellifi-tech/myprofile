<?php

namespace App\Http\Controllers\Api;

use App\Company;
use App\Sector;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $sectors = Sector::get();
                if ($sectors->count() > 0){
                    $json['sectors'] = $sectors;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json(null, 404, [], JSON_UNESCAPED_UNICODE);
                }
            } else {
                $json['status'] = 0;
                $json['message'] = "Sektörler çekilemedi. Api_token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "api-token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }

    public function show(Request $request, $sector_id)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $sector = Sector::where('id', $sector_id)->first();

                if ($sector->count() > 0){
                    $json['status'] = 200;
                    $json['message'] = "Success";
                    $json['sector'] = $sector;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json(null, 404, [], JSON_UNESCAPED_UNICODE);
                }
            } else {
                $json['status'] = 0;
                $json['message'] = "Sektör çekilemedi. Api_token geçersizdir.";
                return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
            }
        } else {
            $json['status'] = 0;
            $json['message'] = "api-token boş olamaz";
            return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
