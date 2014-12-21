<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE list_contents');
		DB::statement('TRUNCATE pantry_lists');
		DB::statement('TRUNCATE items');
		DB::statement('TRUNCATE users');
		DB::statement('TRUNCATE categories');
		
		$this->call('CategoryAndItemTableSeeder');
		$this->call('UserTableSeeder');


	}

}
