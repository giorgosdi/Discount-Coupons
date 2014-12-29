<?php

Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create') );
Route::get('logout', array('as' => 'logout', 'uses'=>'SessionsController@destroy') );

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');
Route::resource('coupons', 'CouponsController');
Route::resource('categories', 'CategoriesController');

Route::get('users/profile', array('as'=>'profile', 'uses'=>'UsersController@show'));
Route::get('categories/cat', array('as'=>'cat', 'uses'=>'CategoriesController@show'));
Route::get('print', array('as'=>'print', 'uses'=>'PrinterController@index'));


Route::get('/', ['as'=>'home', function()
{
	$total=Coupon::all()->count();
	$col1 = ceil($total * 0.33);
	$col2 = ceil(($total - $col1) * 0.5);
	$col = $col1+$col2;	


	$data = Coupon::all();
	$data1 = Coupon::all()->take($col1);
	$data2 = $data->slice($col1, $col2);
	$data3 = $data->slice($col);


	return View::make('index')->with('data1',$data1)->with('data2',$data2)->with('data3',$data3);
}]);
