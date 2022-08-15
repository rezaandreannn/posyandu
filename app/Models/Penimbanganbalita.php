<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbanganbalita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = 'balita';

    public function balita()
    {
        return  $this->belongsTo(Balita::class);
    }
}
