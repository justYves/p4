<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function($table) {

		    $table->increments('id');
		    $table->string('name');
		    $table->timestamps();
		    $table->integer('category_id')->unsigned(); 
		    $table->foreign('category_id')->references('id')->on('categories'); 

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}

