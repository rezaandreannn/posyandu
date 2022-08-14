<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SetAntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'waktu_buka' => Carbon::now(),
            'waktu_tutup' => Carbon::now()
        ]);
    }
}
