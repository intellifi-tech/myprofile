<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//region Yönetim Yolları
Route::middleware('auth')->prefix('yonetim')->as('admin.')->group(function () {

    Route::get('anasayfa', 'Admin\DashboardController@index');

    Route::resource('sector', 'Admin\SectorController');
    Route::get('sector-sil/{id}', 'Admin\SectorController@destroy');

    Route::resource('company', 'Admin\CompanyController');

    Route::resource('event', 'Admin\EventController');

    Route::resource('user', 'Admin\UserController');
    Route::post('getOnlineUserCoordinates', 'Admin\UserController@getOnlineUserCoordinates');

    Route::resource('city', 'Admin\CityController');

    Route::resource('town', 'Admin\TownController');


    //region Dashboard Ajax Routes
    Route::get('hourlyOnlineUserCount', 'Admin\AjaxController@hourlyOnlineUserCount')->name('hourlyOnlineUserCount');
    //endregion

});
//endregion

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
