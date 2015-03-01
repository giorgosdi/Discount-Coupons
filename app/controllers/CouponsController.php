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



		$data = Coupon::whereBetween('created_at', $date)->paginate(1);


		return View::make('coupons.new_coupons')->with('data', $data);
	}

	public function about_to_expire()
	{
		$today = new DateTime('today');
		$zero = 0;

		$data = Coupon::where('expiration_date', '=', $today)->where('availability', '>', $zero)->paginate(1);

		return View::make('coupons.about_to_expire')->with('data', $data);
	}

	public function search()
	{

		$yesterday = Carbon::yesterday();
		$zero = 0;

		$search_query = Input::get('search_query',null);




		$data = Coupon::where('expiration_date', '>', $yesterday)->where('availability', '>', $zero)->where(function($query) use ($search_query){
			$query->where('title', 'LIKE', '%'.$search_query.'%')->orWhere('description', 'LIKE', '%'.$search_query.'%');
		})
		->paginate(10);
		$pagination = $data->appends(array('search_query' => $search_query));
		
		return View::make('coupons.search_results')->with('data',$data)->with('pagination', $pagination);
	
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
		$coupon->users()->attach($user_id, ['hash' => 'abc']);

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
		$id = Input::get('id');
		$user_id = Input::get('user_id');
		$cpn = Coupon::find($id);


		$cpn->availability = $cpn->availability - 1;
		$cpn->save();

		$cpn_hash = $string = str_random(10);

		$cpn->users()->attach($user_id, ['hash' => $cpn_hash]);



		return View::make('coupons.ready_to_print')->with('cpn',$cpn)->with('cpn_hash', $cpn_hash);

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
