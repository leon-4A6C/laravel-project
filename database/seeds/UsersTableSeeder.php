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
        //
        User::create([
            "first_name" => "Leon",
            "last_name" => "in 't Veld",
            "email" => "leon3110l@gmail.com",
            "password" => bcrypt("password")
        ]);
    }
}
