<?php

Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create') );
Route::get('logout', array('as' => 'logout', 'uses'=>'SessionsController@destroy') );

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');
Route::resource('coupons', 'CouponsController');
Route::resource('categories', 'CategoriesController');

Route::get('users/profile', array('as'=>'profile', 'uses'=>'UsersController@show'));
Route::get('edit_data', array('as'=>'edit_data', 'uses'=>'UsersController@edit'));
Route::get('change_pass', array('as'=>'change_pass', 'uses'=>'UsersController@change_pass'));
Route::get('categories/cat', array('as'=>'cat', 'uses'=>'CategoriesController@show'));
Route::get('print', array('as'=>'print', 'uses'=>'PrinterController@index'));
Route::get('new_coupons', array('as'=>'new_coupons', 'uses'=>'CouponsController@new_coupons'));
Route::get('ready_to_print', array('as'=>'ready_to_print', 'uses'=>'CouponsController@show'));
Route::get('about_to_expire', array('as'=>'about_to_expire', 'uses'=>'CouponsController@about_to_expire'));
Route::get('search_results', array('as'=>'search_results', 'uses'=>'CouponsController@search'));

Route::put('update_pass', ['as' => 'users.update_pass', 'uses'=>'UsersController@update_pass']);

Route::get('/', ['as'=>'home', function()
{
	$yesterday = Carbon::yesterday();
	$zero = 0;

	// $total= Coupon::where('availability', '>', $zero)->where('expiration_date', '>', $yesterday)->count();
	// $col1 = ceil($total * 0.33);
	// $col2 = ceil(($total - $col1) * 0.5);
	// $col = $col1+$col2;	


	$data = Coupon::where('availability', '>', $zero)->where('expiration_date', '>', $yesterday)->paginate(1);
	// $data1 = $data->take($col1);
	// $data2 = $data->slice($col1, $col2);
	// $data3 = $data->slice($col);

	return View::make('index')->with('data',$data);
}]);