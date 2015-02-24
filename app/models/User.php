<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = [ 'username', 'password', 'first_name', 'last_name', 'email', 'type' ];
	
	public static $rules = [
		'username'=>'required',
		'password'=>'required',
		'email'=>'required',
		'type'=>'required',
	];

	public function coupons()
	{
		return $this->belongsToMany('Coupon')->withPivot('hash');
	}
	public $errors;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


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

	public function convert_type($type)
	{
		if($type == 1)
		{
			return 'Professional';
		}
		return 'Customer';
	}
	
}
