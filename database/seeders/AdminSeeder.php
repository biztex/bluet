<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@cloudear.jp',
            'password' => \Hash::make('admin'),
        ]);
    }
}
