<?php

namespace App\Http\Controllers\Api;

use App\Company;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $companies = Company::get();
                if ($companies->count() > 0){
                    return response()->json($companies, 200, [], JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json(null, 404, [], JSON_UNESCAPED_UNICODE);
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

    public function show(Request $request, $company_id)
    {
        if ($request->header('api-token')) {
            $user = User::where('api_token', $request->header('api-token'))->first();
            if ($user) {
                $company = Company::where('id', $company_id)->first();
                if ($company->count() > 0){
                    $json['status'] = 200;
                    $json['message'] = "Success";
                    $json['company'] = $company;
                    return response()->json($json, 200, [], JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json(null, 404, [], JSON_UNESCAPED_UNICODE);
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
}
