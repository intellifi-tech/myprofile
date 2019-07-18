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
Route::put('user/update', 'Api\UserController@update');
Route::post('user/login', 'Api\UserController@login');
Route::post('user/register', 'Api\UserController@register');
Route::get('user/indexExperiences', 'Api\UserController@indexExperiences');
Route::get('user/{user_id}/show', 'Api\UserController@userIdShow'); //ID'si gelen kullanıcının deneyimleri, token ile giren kullanıcının değil.
Route::get('user/{user_id}/showUserExperiences', 'Api\UserController@showUserExperiences'); //ID'si gelen kullanıcının deneyimleri, token ile giren kullanıcının değil.
Route::post('user/storeExperiences', 'Api\UserController@storeExperiences');
Route::get('user/{experiences_id}/destroyExperiences', 'Api\UserController@destroyExperiences');
Route::post('user/userAttendedEvent', 'Api\UserController@userAttendedEvent');
Route::post('user/userAttendedEvents', 'Api\UserController@userAttendedEvents');
Route::post('user/userPrivacySettings', 'Api\UserController@userPrivacySettings');
Route::post('user/coordinate/setCoordinates', 'Api\UserCoordinateController@setCoordinates');
Route::post('user/coordinate/nearbyUsers', 'Api\UserCoordinateController@nearbyUsers');
Route::post('user/followings', 'Api\UserFollowController@followings');
Route::post('user/followers', 'Api\UserFollowController@followers');
Route::post('user/follow', 'Api\UserFollowController@follow');
Route::post('user/stopFollowing', 'Api\UserFollowController@stopFollowing');
Route::get('user/indexPhotos', 'Api\UserPhotoGalleryController@indexPhotos');
Route::post('user/addPhoto', 'Api\UserPhotoGalleryController@addPhoto');
Route::post('user/likeActivity', 'Api\UserController@likeActivity'); // Kullanıcının yaptığı etkinliğe katılma aktivitesini beğen.
Route::get('user/{user_id}/events','Api\UserController@idEvents');
Route::get('user/{user_id}/gallery','Api\UserController@gallery');
// endregion


// region Etkinlikler
Route::get('event/index', 'Api\EventController@index');
Route::get('event/{event_id}/show', 'Api\EventController@show');
Route::post('event/search', 'Api\EventController@searchEvent');
Route::post('event/nearbyEvents', 'Api\EventController@nearbyEvents');
// endregion

//region Yorumlar
Route::post('comment/create', 'Api\CommentController@create');
//endregion

//region Mesajlar
Route::get('message/getMessages', 'Api\MessageController@getMessages');
Route::post('message/sendMessage', 'Api\MessageController@sendMessage');
Route::get('message/{to_user_id}/readMessage', 'Api\MessageController@readMessage');
Route::get('message/{user_id}/userIndexMessages', 'Api\MessageController@userIndexMessages');
//endregion

//region Aktiviteler
Route::post('activity/likesActivity', 'Api\UserActivityController@likesActivity');
//endregion

//region Firmalar
Route::get('company/index', 'Api\CompanyController@index');
Route::get('company/{company_id}/show', 'Api\CompanyController@show');
//endregion

//region Sektörler
Route::get('sector/index', 'Api\SectorController@index');
Route::get('sector/{sector_id}/show', 'Api\SectorController@show');
//endregion

//region Kullanıcı Fotoğrafları
Route::get('photo/{photo_id}/likePhoto', 'Api\UserPhotoGalleryController@likePhoto');
Route::get('photo/{photo_id}/deletePhoto', 'Api\UserPhotoGalleryController@deletePhoto');
//endregion

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});