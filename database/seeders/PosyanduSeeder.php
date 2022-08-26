<?php

namespace Database\Seeders;

use App\Models\Posyandu;
use Illuminate\Database\Seeder;

class PosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posyandu::create([
            'nama' => 'Posyandu Mawar',
            'warna' => '#2306b7'
        ]);
        Posyandu::create([
            'nama' => 'Posyandu Teratai',
            'warna' => '#102546'
        ]);
        Posyandu::create([
            'nama' => 'Posyandu Matahari',
            'warna' => '#602f2f'
        ]);
        Posyandu::create([
            'nama' => 'Posyandu Melati',
            'warna' => '#6a2f69'
        ]);
        Posyandu::create([
            'nama' => 'Posyandu Anggrek',
            'warna' => '#347469'
        ]);
    }
}
