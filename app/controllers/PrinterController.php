<?php

class PrinterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /printer
	 *
	 * @return Response
	 */
	public function index()
	{
		$id = Input::get('id');
		$coupon = Coupon::find($id);

		$pdf = App::make('dompdf');
		$pdf->loadHTML(
				'<div class="thumbnail">
			      <img src="img/coupon.jpg">
			      <div class="caption">
			        <h3>'.$coupon->title.'</h3>
			        <p>'.$coupon->description.'</p>
			        <p>'.$coupon->price.'$</p>
			      </div>
			    </div>'
		);
		return $pdf->stream();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /printer/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /printer
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /printer/{id}
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
	 * GET /printer/{id}/edit
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
	 * PUT /printer/{id}
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
	 * DELETE /printer/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}