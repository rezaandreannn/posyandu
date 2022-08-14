<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitaminbalita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = 'balita';

    const JENISVITAMIN = ['Vitamin A Kapsul Biru', 'Vitamin A Kapsul Merah'];

    public function balita()
    {
        return  $this->belongsTo(Balita::class);
    }
}
