<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::query()->delete();
    	
        User::create([
        	'name' => 'Mohamed Said',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
    }
}
