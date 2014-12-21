<?php
 
class UserTableSeeder extends Seeder {
 
 	public function run()
  	{
		$user = new User;
		$user->email = 'yves@test.com';
		$user->password = Hash::make('testp4');
		$user->username = 'admin';
		$user->first_name = 'Yves';
		$user->last_name = 'Yuen';
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
