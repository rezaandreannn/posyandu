<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vitaminbalita;
use App\Models\Imunisasibalita;
use App\Models\Penimbanganbalita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balita extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    // protected $with = ['balitapenimbangans'];

    const BULAN = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'July',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];
    const TAHUN = [
        '2022' => '2022',
        '2023' => '2023',
        '2024' => '2024',
        '2025' => '2025'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function balitaimunisasis()
    {
        return $this->hasMany(Imunisasibalita::class);
    }

    public function balitavitamins()
    {
        return $this->hasMany(Vitaminbalita::class);
    }

    public function balitapenimbangans()
    {
        return $this->hasMany(Penimbanganbalita::class);
    }
}
