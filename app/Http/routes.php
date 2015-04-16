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

Route::get('/', 'MainController@index');

Route::get('/item', function() {
    return view('guest.item');
});

Route::get('/item/{id}', 'MainController@item');

Route::get('/category', function() {
    return view('guest.category');
});

Route::get('/item-collections', function() {
    return view('guest.item-collections');
});

Route::get('home', 'HomeController@index');

Route::get('admin', 'AdminController@login');

Route::get('admin/dashboard', [
	// 'before' => 'auth',
	'uses' => 'AdminController@index'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
