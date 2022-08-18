<?php

namespace App\Models;

use App\Models\Bumil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vitaminbumil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = 'bumil';

    const JENISVITAMIN = ['Asam Folat', 'Vitamin D', 'Zat Besi', 'Kalsium'];

    public function bumil()
    {
        return  $this->belongsTo(Bumil::class);
    }
}
