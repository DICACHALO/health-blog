<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Diana Chacón',
            'email' => 'dianachacon@gmail.com',
            'birth_date'=> '1950-11-24',
            'password' => Hash::make('123456789'),
            'user_type' => 'Member',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin-blog@gmail.com',
            'password' => Hash::make('987654321'),
            'birth_date'=> '1989-11-24',
            'user_type' => 'Administrator',
        ]);
    }
}
