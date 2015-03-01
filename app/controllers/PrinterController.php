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
		$user_id = Input::get('user_id');
		$coupon = Coupon::find($id);
		$hash = Input::get('hash');

		

		$pdf = App::make('dompdf');
		$pdf->loadHTML(
				'<div class="thumbnail">
						<img src="img/'.$coupon->path.'" class="img-rounded" alt="'.$coupon->title.'" width=150 height=135 >
			      <div class="caption">
			        <p><strong>Title:</strong> '.$coupon->title.'</p>
			        <p><strong>Description:</strong> '.$coupon->description.'</p>
			        <p><strong>Price:</strong> '.round($coupon->price,2).' €</p>
			        <p><strong>Unique hash:</strong> '.$hash.'</p>
			      </div>
			  </div>'
		)->setPaper('a6');
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