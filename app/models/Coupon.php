<?php

class Coupon extends \Eloquent {

	protected $table = 'coupons';
	
	protected $fillable = [ 'title', 'description', 'expiration_date', 'price', 'discount_percentage', 'availability'];

	public function users()
	{
		return $this->belongsToMany('User');
	}
	
	public function categories()
	{
		return $this->belongsToMany('Category');
	}

	public $errors;
	// public $datetime = new DateTime;
	public static $rules = [
		'title'=>'required',
		'description'=>'required',
		'expiration_date'=>'required',
		'initial_price'=>'required|integer',
		'price'=>'required|integer',
		'discount_percentage'=>'required|integer',
		'availability'=>'required|integer|min:1'
	];

	public function isValid()
	{
		$validation = Validator::make($this->attributes, static::$rules);

		if($validation->passes())
		{
			return true;
		}

		$this->errors = $validation->messages();

		return false;
	}
}