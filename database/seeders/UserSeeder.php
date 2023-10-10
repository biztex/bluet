<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@cloudear.jp',
            'password' => \Hash::make('user'),
        ]);
    }
}
