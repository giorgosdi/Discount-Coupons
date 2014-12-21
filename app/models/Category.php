<?php

class Category extends \Eloquent {
	protected $table = 'categories';
	protected $fillable = [];

	public function coupons()
	{
		return $this->belongsToMany('Coupon');
	}
}