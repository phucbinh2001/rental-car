<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Bình',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
            'admin' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'User Phúc',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123123'),
            'admin' => 0
        ]);
    }
}