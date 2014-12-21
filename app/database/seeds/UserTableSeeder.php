<?php
 
class UserTableSeeder extends Seeder {
 
 	public function run()
  	{
		$user = new User;
		$user->email = 'admin@php.com';
		$user->password = Hash::make('password');
		$user->username = 'admin';
		$user->first_name = 'admin';
		$user->last_name = 'admin';
		$user->save();


		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 2; $i++)
		{
		   $user = new User;
		   $user->email = $faker->email;
		   $user->password = Hash::make('testp4');
		   $user->username = $faker->username;
		   $user->first_name = $faker->firstName;
		   $user->last_name = $faker->lastName;
		   $user->save();

  		}
  	}
}
