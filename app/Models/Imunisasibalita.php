<?php

namespace App\Models;

use App\Models\Balita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imunisasibalita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = 'balita';

    const NAMAIMUNISASI = ['Hepatitis B', 'BCG', 'Polio', 'DPT', 'Campak'];
    const JENISIMUNISASI = ['HB', 'BCG polio 1', 'DPT/HB 1'];

    public function balita()
    {
        return  $this->belongsTo(Balita::class);
    }
}
