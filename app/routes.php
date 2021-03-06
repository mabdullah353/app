<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
App::bind('OrdersRepositoryInterface',  'OrderRepository');
Route::get('/', function()
{
	return Redirect::action('CodesController@index');
});

Route::resource('codes','CodesController');
Route::controller('users','UsersController');

Route::resource('items','ItemsController');
Route::resource('orders','OrdersController');
Route::resource('pictures','PicturesController');

Route::controller('mws', 'MwsController');
