<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		$cat = new Category;

		$cat->title = Input::get('title');

		$cat->save();

		return Redirect::home();
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function show()
	{
		$id = Input::get('id'); // we take the id sent from the default.blade.php in the categories dropdown
		$total=Category::find($id)->coupons->count();
		$col1 = ceil($total * 0.33);
		$col2 = ceil(($total - $col1) * 0.5);
		$col = $col1+$col2;	

		$data = Category::find($id)->coupons;
		$data1 = Category::find($id)->coupons->take($col1);
		$data2 = $data->slice($col1, $col2);
		$data3 = $data->slice($col);

		return View::make('categories.show')->with('data1',$data1)->with('data2',$data2)->with('data3',$data3);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
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
	 * PUT /categories/{id}
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
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}