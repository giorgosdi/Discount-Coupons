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
		$date = array(
		    Carbon::today(),
		    Carbon::tomorrow()
		);
		$total = Coupon::whereBetween('created_at', $date)->count();
		$col1 = ceil($total * 0.33);
		$col2 = ceil(($total - $col1) * 0.5);
		$col = $col1+$col2;


		$data = Coupon::whereBetween('created_at', $date)->get();
		$data1 = $data->take($col1);
		$data2 = $data->slice($col1, $col2);
		$data3 = $data->slice($col);

		return View::make('coupons.new_coupons')->with('data1', $data1)->with('data2', $data2)->with('data3', $data3);
	}

	public function about_to_expire()
	{
		$today = new DateTime('today');
		$total = Coupon::where('expiration_date', '=', $today)->count();
		$col1 = ceil($total * 0.33);
		$col2 = ceil(($total - $col1) * 0.5);
		$col = $col1+$col2;


		$data = Coupon::where('expiration_date', '=', $today)->get();
		$data1 = $data->take($col1);
		$data2 = $data->slice($col1, $col2);
		$data3 = $data->slice($col);
		
		return View::make('coupons.about_to_expire')->with('data1', $data1)->with('data2', $data2)->with('data3', $data3);
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
		$destinationPath='';
		$filename='';
	// 	$file = Input::file('image');
	// 	$upload = $file->move($destinationPath, $filename);

		$user_id = Input::get('user_id');
		$category = Input::get('category');
		$input = Input::all();



		$file = Input::file('image');
		$destinationPath = public_path().'/img/';
		$filename = str_random(3).'_'.$file->getClientOriginalName();
		$file->move($destinationPath, $filename);
		


		$coup = new Coupon;

		$coup->title = Input::get('title');
		$coup->description = Input::get('description');
		$coup->category = Input::get('category');
		$coup->expiration_date = Input::get('expiration_date');
		$coup->initial_price = Input::get('initial_price');
		$coup->price = Input::get('price');
		$coup->discount_percentage = Input::get('discount_percentage');
		$coup->availability = Input::get('availability');
		$coup->path = $filename;

		// if(!$this->coupon->fill($input)->isValid())
		// 	return Redirect::back()->withInput()->withErrors($this->coupon->errors);
		if(!$coup->save())
				return Redirect::back()->withInput()->withErrors($coup->errors);
		// $this->coupon->save();

		$coupon = $coup;

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
