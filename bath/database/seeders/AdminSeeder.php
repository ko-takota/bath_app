<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
              'name' => 'test',
              'email' => 'developer@gmail.com',
              'password' => Hash::make('password'),
              'created_at' => '2023/04/01 12:10:11'
            ],
            [
              'name' => 'test2',
              'email' => 'developer2@gmail.com',
              'password' => Hash::make('password'),
              'created_at' => '2023/04/01 12:10:11'
            ],
        ]);
    }
}
