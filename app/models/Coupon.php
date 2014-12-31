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

	public static $rules = [
		'title'=>'required',
		'description'=>'required',
		'expiration_date'=>'required',
		'price'=>'required|integer',
		'discount_percentage'=>'required|integer',
		'availability'=>'required|integer'
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