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
		$today = new DateTime('today');
		$coupons = Coupon::all();

		$new_coupons = Coupon::where('created_at', '=', $today)->get();
		return View::make('coupons.new_coupons')->with('new_coupons', $new_coupons);
	}

	public function about_to_expire()
	{
		$today = new DateTime('today');
		$coupons = Coupon::where('expiration_date', '=', $today)->get();
		return View::make('coupons.about_to_expire')->with('coupons', $coupons);
	}

	public function search()
	{
		$search_query = Input::get('search_query');
		$results = Coupon::where('title', 'LIKE', '%'.$search_query.'%')->orWhere('description', 'LIKE', '%'.$search_query.'%')->get();		
		$total = Coupon::where('title', 'LIKE', '%'.$search_query.'%')->orWhere('description', 'LIKE', '%'.$search_query.'%')->get()->count();	

		$col1 = ceil($total * 0.33);
		$col2 = ceil(($total - $col1) * 0.5);
		$col = $col1+$col2;	

		$data1 = $results->take($col1);
		$data2 = $results->slice($col1, $col2);
		$data3 = $results->slice($col);
		
		return View::make('coupons.search_results')->with('data1',$data1)->with('data2',$data2)->with('data3',$data3)->with('total',$total);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::all();
		$selectCategories = array();
		foreach($categories as $category)
		{
			$selectCategories[0] = '';
			$selectCategories[$category->id] = $category->title;
		}
		return View::make('coupons.create')->with('selectCategories', $selectCategories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user_id = Input::get('user_id');
		$category = Input::get('category');
		$input = Input::all();

		if(!$this->coupon->fill($input)->isValid())
			return Redirect::back()->withInput()->withErrors($this->coupon->errors);

		$this->coupon->save();

		$coupon = $this->coupon;

		$coupon->categories()->attach($category);
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
