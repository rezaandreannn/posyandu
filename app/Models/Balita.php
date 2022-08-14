<?php

namespace App\Models;

use App\Models\Imunisasibalita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balita extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function balitaimunisasis()
    {
        return $this->hasMany(Imunisasibalita::class);
    }
}
