<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'nik' => '234563637',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'role_id' => 2,
            'name' => 'posyandu teratai',
            'email' => 'tes@gmail.com',
            'nik' => '234563601',
            'password' => bcrypt('password'),
            'posyandu' => 'Posyandu Teratai',
        ]);
    }
}
