<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'John Doe', 'email' => 'johndoe1@gmail.com', 'phone' => '082122318476', 'role' => 'Admin', 'password' => 'johndoe123'],
            ['id' => 2, 'name' => 'Christine Doe', 'email' => 'christinedoe1@gmail.com', 'phone' => '038499281234', 'role' => 'User', 'password' => 'christinedoe123'],
            ['id' => 3, 'name' => 'Vanessa Doe', 'email' => 'vanessadoe1@gmail.com', 'phone' => '029838192844', 'role' => 'Admin', 'password' => 'vanessadoe123'],
            ['id' => 4, 'name' => 'Kevin Doe', 'email' => 'kevindoe1@gmail.com', 'phone' => '083718273311', 'role' => 'User', 'password' => 'kevindoe123'],
            ['id' => 5, 'name' => 'Cole Doe', 'email' => 'coledoe1@gmail.com', 'phone' => '038759372344', 'role' => 'User', 'password' => 'coledoe123']
        ]);
    }
}
