<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('fill/sensors', 'FillController@sensors');

Route::get('fill/stypes', 'FillController@stypes');

Route::get('delete/device/{id}',  'DeleteController@device');

Route::resource('devices', 'DevicesController');

//Route::resource('images', 'ImagesController');
//
//Route::resource('sensors', 'SensorsController');
//
//Route::resource('actuators', 'ActuatorsController');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
