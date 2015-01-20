<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function($table){
       		$table->increments('id');
       		$table->string('name');
		    $table->string('img_url')->nullable;
		    $table->string('client')->nullable;
		    $table->string('short_desc')->nullable;
		    $table->string('role')->nullable;
		    $table->string('long_desc')->nullable;
		    $table->string('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');

	}

}
