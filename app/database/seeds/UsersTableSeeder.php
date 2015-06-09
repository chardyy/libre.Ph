<?php

// Composer: "fzaninotto/faker": "v1.3.0"

class UsersTableSeeder extends Seeder {

	public function run()
	{
		

			User::create([
				'name' => 'Richard Orofeo',
				'username' => 'admin',
				'password' => Hash::make('password')
			]);
		
	}

}