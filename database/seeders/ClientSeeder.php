<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->insert([
            'name' => 'client',
            'email' => 'client@cloudear.jp',
            'password' => \Hash::make('client'),
        ]);
    }
}
