<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('list_contents', function($table) {

		    $table->integer('pantry_list_id')->unsigned(); 
		    $table->foreign('pantry_list_id')->references('id')->on('pantry_Lists'); 
		    $table->integer('item_id')->unsigned(); 
		    $table->foreign('item_id')->references('id')->on('items'); 
		    $table->increments('id');
		    $table->boolean('active')->default(1); 
		    $table->integer('amount')->default(0)->unsigned(); 	
		   // $table->primary(array('pantry_list_id','item_id','position'))->unique();	    
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
		Schema::drop('list_contents');
	}

}
