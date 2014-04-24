<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create courses table
		Schema::create('courses', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			// sets if this course have representative position
			$table->integer('representative')->default(0);
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
		// delete courses table
		Schema::drop('courses');
	}

}
