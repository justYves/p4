<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function($table) {

		    $table->increments('id');
		    $table->char('employee_id', 5)->unique();
		    $table->string('first_name');
		    $table->string('last_name');
		    $table->date('date_of_birth');
		    $table->char('ssn', 9);
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
		Schema::drop('employees');
	}

}
