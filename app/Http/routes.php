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

Route::resource('customers', 'OrdersController');

Route::resource(    'instruments',                          'InstrumentsController');
Route::resource(    'attachments',              'AttachmentsController');
Route::post('attachments/upload', 'AttachmentsController@upload');




Route::resource(    'impurities',              'ImpuritiesController');
Route::resource(    'base_gas',                'BaseGasController');
Route::resource(    'other_devices',           'OtherDevicesController');
Route::resource(    'complete_orders',           'CompleteOrderController');
Route::post(         'completed',              'CompleteOrderController@completed');




Route::get('users/index', 'UsersController@index');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
