<?php

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');
Route::resource('coupons', 'CouponsController');
Route::resource('users', 'UsersController');
Route::resource('coupons', 'CouponsController');


Route::get('/', ['as'=>'home', function()
{
	return View::make('index');
}])->before('auth');