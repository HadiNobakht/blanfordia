<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\User::create([
				'email' 		=> 'hadinobakht@aol.com' ,
				'first_name' 	=> 'Hadi' ,
				'last_name' 	=> 'Nobakht' ,
				'password' 		=> '123456' ,
			]);
    }
}
