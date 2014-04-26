<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create students table
		Schema::create('students', function($table) {
			$table->increments('id');
			$table->integer('course_id');
			$table->string('fname');
			$table->string('mname');
			$table->string('lname');
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
		// delete students table
		Schema::drop('students');
	}

}
