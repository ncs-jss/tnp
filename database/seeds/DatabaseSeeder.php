<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User;
    	$user->name = "admin";
    	$user->email = "admin@gmail.com";
    	$user->password = Hash::make('admin');
    	$user->save();
        // $this->call(UsersTableSeeder::class);
    }
}
