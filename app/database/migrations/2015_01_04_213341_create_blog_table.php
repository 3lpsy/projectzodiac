<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog', function($table){
       		$table->increments('id');
       		$table->string('title');
		    $table->string('sub_title');
		    $table->string('description');
		    $table->string('content')->nullable;
		    $table->string('content_url');
		    $table->rememberToken();
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
		     	Schema::drop('users');

	}

}
