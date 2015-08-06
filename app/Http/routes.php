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

Route::get('orders', 'OrdersController@index');
Route::get('orders/create', 'OrdersController@create');
Route::post('orders', 'OrdersController@store');
Route::get('orders/{id}', 'OrdersController@show');



Route::get('users/index', 'UsersController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
