<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create positions table
		Schema::create('positions', function($table) {
			$table->increments('id');
			$table->unsignedInteger('course_id')->nullable();
			$table->foreign('course_id')
					->references('id')
					->on('courses')
					->onDelete('restrict')
					->onUpdate('cascade');
			$table->string('name');
			$table->integer('ordinality')->nullable();
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
		// drop positions table
		Schema::drop('positions');
	}

}
