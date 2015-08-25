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
Route::get(         'instruments/attachments',              'AttachmentsController@index');
Route::get(         'instruments/attachments/{filename}',   ['as'=>'getentry', 'uses'=>'AttachmentsController@get']);
Route::get(         'instruments/attachments/add',          ['as'=>'addentry', 'uses'=>'AttachmentsController@add']);
Route::resource(    'instruments/impurities',              'ImpuritiesController');
Route::resource(    'instruments/base_gas',                'BaseGasController');
Route::resource(    'instruments/other_devices',           'OtherDevicesController');

Route::get('users/index', 'UsersController@index');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
