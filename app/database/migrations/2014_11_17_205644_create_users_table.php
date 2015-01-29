<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('username');
			$newtable->string('password');
			$newtable->string('first_name');
			$newtable->string('last_name');
			$newtable->string('email')->unique();
			$newtable->string('type');
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
		Schema::drop('users');
	}

}
