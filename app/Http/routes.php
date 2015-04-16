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
Route::get('/collections/{id}', 'MainController@collections');

Route::get('/category', function() {
    return view('guest.category');
});

Route::get('/item-collections', function() {
    return view('guest.item-collections');
});

Route::get('home', 'HomeController@index');

Route::get('admin', 'AdminController@showLogin');
Route::post('admin', 'AdminController@login');

Route::get('admin/add-item', 'AdminController@showAddItem');
Route::post('admin/add-item', 'AdminController@addItem');

Route::get('admin/add-promo', 'AdminController@showAddPromo');
Route::post('admin/add-promo', 'AdminController@addPromo');
Route::get('admin/edit-promo/{id}', 'AdminController@showEditPromo');
Route::post('admin/edit-promo/{id}', 'AdminController@editPromo');
Route::get('admin/delete-promo/{id}', 'AdminController@deletePromo');

Route::get('admin/edit-item/{id}', 'AdminController@showEditItem');
Route::post('admin/edit-item/{id}', 'AdminController@editItem');
Route::get('admin/delete-item/{id}', 'AdminController@deleteItem');

Route::get('admin/dashboard', 'AdminController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
