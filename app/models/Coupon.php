<?php

class Coupon extends \Eloquent {
	protected $fillable = [ 'title', 'description', 'expiration_date', 'price', 'discount_percentage', 'availability'];

	public $errors;

	public static $rules = [
		'title'=>'required',
		'description'=>'required',
		'expiration_date'=>'required',
		'price'=>'required',
		'discount_percentage'=>'required',
		'availability'=>'required'
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