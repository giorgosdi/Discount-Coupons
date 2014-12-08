<?php

Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create') );
Route::get('logout', array('as' => 'logout', 'uses'=>'SessionsController@destroy') );

Route::resource('sessions', 'SessionsController');
Route::resource('coupons', 'CouponsController');
Route::resource('users', 'UsersController');
Route::resource('coupons', 'CouponsController');


Route::get('/', ['as'=>'home', function()
{
	return View::make('index');
}]);