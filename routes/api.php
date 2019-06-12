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
Route::post('user/attendedActivity', 'Api\UserController@userAttendedActivity');
Route::post('user/attendedActivities', 'Api\UserController@userAttendedActivities');
Route::post('user/coordinate/setCoordinates', 'Api\UserCoordinateController@setCoordinates');
Route::post('user/coordinate/nearbyUsers', 'Api\UserCoordinateController@nearbyUsers');
Route::post('user/followers', 'Api\UserFollowController@followers');
Route::post('user/follow', 'Api\UserFollowController@follow');
Route::post('user/stopFollowing', 'Api\UserFollowController@stopFollowing');
// endregion

// region Etkinlikler
Route::post('event/index', 'Api\EventController@index');
Route::post('event/create', 'Api\EventController@create');
Route::post('event/show', 'Api\EventController@show');
// endregion

//region Yorumlar
Route::post('comment/create', 'Api\CommentController@create');
//endregion

//region Mesajlar
Route::post('message/getMessages', 'Api\MessageController@getMessages');
Route::post('message/newMessage', 'Api\MessageController@newMessage');
Route::post('message/answerMessage', 'Api\MessageController@answerMessage');
//endregion

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});