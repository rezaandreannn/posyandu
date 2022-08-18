<?php

namespace App\Models;

use App\Models\Bumil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penimbanganbumil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = 'bumil';

    public function bumil()
    {
        return  $this->belongsTo(Bumil::class);
    }
}
