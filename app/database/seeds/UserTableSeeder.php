<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
		$user = User::create(array(
		  'email' => 'yves@test.com',
		  'password' => Hash::make('testp4'),
		  'username' => 'admin',
		  'first_name' => 'Yves',
		  'last_name' => 'Yuen'
		));

		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 20; $i++)
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
