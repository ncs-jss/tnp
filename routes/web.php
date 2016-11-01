<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['as'=>'login','uses'=>'AuthController@home']);
Route::post('log',['as'=>'log','uses'=>'AuthController@login']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardController@index']);
Route::get('logout',['as'=>'logout','uses'=>'AuthController@logout']);

});