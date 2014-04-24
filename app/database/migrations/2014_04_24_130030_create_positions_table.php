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
			$table->unsignedInteger('courseid')->nullable();
			$table->foreign('courseid')
					->references('id')
					->on('courses')
					->onUpdate('cascade')
					->onDelete('cascade');
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
