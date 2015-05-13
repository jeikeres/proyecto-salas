<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
          
           \DB::table('users')->insert(array(
             'name'  => "roberto",
              'email' => "robertoesparza3@gmail.com",
              'password' => \Hash::make("1234"),
             

        	));
		 //$this->call('UserTableSeeder');
	}

}
