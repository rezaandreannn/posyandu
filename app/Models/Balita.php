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
