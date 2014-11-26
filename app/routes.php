<?php

Route::resource('login', 'SessionsController@create');
Route::resource('coupons', 'CouponsController');
Route::resource('users', 'UsersController');
Route::resource('coupons', 'CouponsController');

