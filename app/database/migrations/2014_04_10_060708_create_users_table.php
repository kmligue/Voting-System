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
		// create users table
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->integer('usertype_id');
			$table->string('fname');
			$table->string('mname')->nullable();
			$table->string('lname');
			$table->string('username');
			$table->string('password');
			$table->string('image');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// delete users table
		Schema::drop('users');
	}

}
