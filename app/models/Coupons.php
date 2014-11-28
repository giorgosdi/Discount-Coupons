<?php

class Coupons extends \Eloquent {
	protected $fillable = [ 'title', 'description', 'created', 'expiration_date', 'price', 'discount_percentage', 'availability'];

}