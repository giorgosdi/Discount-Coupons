<?php

class UsersController extends \BaseController {


	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// SEE STORE FUNCTION FROM LEARNING LARAVEL FOR ADVANCED CODE
		$user = new User;
		
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->type = Input::get('type');

		// if($user->save()) return Redirect::home();

		// return Redirect::back()->withInput();
		$input = Input::all();

		if( !$this->user->fill($input)->isValid())
			return Redirect::back()->withInput()->withErrors($this->user->errors);

			$user->save();

		return Redirect::home();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

		if(!Auth::check())
			return View::make('sessions.create');

		$total = Auth::user()->coupons->count();
		$col1 = ceil($total *0.5);
		$col2 = ceil($total - $col1);

		$data = Auth::user()->coupons->sortByDesc('updated_at');

		$data1 = $data->take($col1);
		$data2 = $data->slice($col1, $col2);
		
		$initial_money = Auth::user()->coupons->sum('initial_price');
		$money_spent = Auth::user()->coupons->sum('price');

		if($initial_money != 0)
		{
			$prog_bar = ($money_spent * 100) / $initial_money;
			return View::make('users.profile')->with('data1', $data1)->with('data2', $data2)->with('money_spent', $money_spent)->with('initial_money', $initial_money)->with('prog_bar', $prog_bar);
		}
		$prog_bar = 0;
		return View::make('users.profile')->with('data1', $data1)->with('data2', $data2)->with('money_spent', $money_spent)->with('initial_money', $initial_money)->with('prog_bar', $prog_bar);


	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		return View::make('users.edit_data');
	}

	public function change_pass()
	{
		return View::make('users.change_pass');
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update()
	{
		$user = User::find(Input::get('id'));
		$user->username = Input::get('username');
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');

		$user->save();
		return Redirect::home();
	}

	public function update_pass()
	{
			$user = User::find(Input::get('id'));
			if( Hash::check(Input::get('old_password'), $user->password) )
			{

				$user->password = Hash::make(Input::get('new_password'));

				$user->save();

				return Redirect::home();
			}
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
