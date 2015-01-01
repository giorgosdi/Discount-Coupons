<?php

class CouponsController extends \BaseController {



	protected $coupon;

	public function __construct(Coupon $coupon)
	{
		$this->coupon = $coupon;
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


	public function new_coupons()
	{
		return View::make('coupons.new_coupons');
	}

	public function about_to_expire()
	{
		return View::make('coupons.about_to_expire');
	}

	public function search()
	{
		$search_query = Input::get('search_query');
		
		$results = Coupon::where('title', 'LIKE', '%$search_query%')->get();	
		return View::make('coupons.search_results')->with('results',$results);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('coupons.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user_id = Input::get('user_id');
		$input = Input::all();

		if(!$this->coupon->fill($input)->isValid())
			return Redirect::back()->withInput()->withErrors($this->coupon->errors);

		$this->coupon->save();

		$coupon = $this->coupon;

		$coupon->users()->attach($user_id);

		return Redirect::home();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
