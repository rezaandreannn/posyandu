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

    public function balita()
    {
        return  $this->belongsTo(Balita::class);
    }
}
