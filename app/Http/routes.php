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
Route::get(         'attachments',              'AttachmentsController@index');

Route::get(         'attachments/add',          ['as'=>'addentry', 'uses'=>'AttachmentsController@add']);
Route::get(         'attachments/{filename}',   ['as'=>'getentry', 'uses'=>'AttachmentsController@get']);

Route::resource(    'impurities',              'ImpuritiesController');
Route::resource(    'base_gas',                'BaseGasController');
Route::resource(    'other_devices',           'OtherDevicesController');
Route::resource(    'complete_orders',           'CompleteOrderController');


Route::get('users/index', 'UsersController@index');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
