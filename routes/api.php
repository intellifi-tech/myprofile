<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// region Kullanıcılar
Route::get('user/index', 'Api\UserController@index');
Route::post('user/show', 'Api\UserController@show');
Route::post('user/update', 'Api\UserController@update');
Route::post('user/login', 'Api\UserController@login');
Route::post('user/register', 'Api\UserController@register');
// endregion

// region Etkinlikler
Route::get('event/index', 'Api\EventController@index');
// endregion

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
