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

Route::prefix('yonetim')->as('admin.')->group(function () {

    Route::get('anasayfa', 'Admin\DashboardController@index');

    //region Ayarlar Yolları
//    Route::get('/ayarlar', 'Admin\SettingController@edit');
//    Route::post('/ayarlar', 'Admin\SettingController@update');
    //endregion

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
