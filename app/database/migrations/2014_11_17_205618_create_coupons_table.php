<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coupons', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('title');
			$newtable->text('description');
			$newtable->date('created');
			$newtable->date('expiration_date');
			$newtable->float('price');
			$newtable->integer('discount_percentage');
			$newtable->integer('availability');
			$newtable->timestamps('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coupons');
	}

}
