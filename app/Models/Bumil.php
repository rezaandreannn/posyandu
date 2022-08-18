<?php

namespace App\Models;

use App\Models\Vitaminbumil;
use App\Models\Imunisasibumil;
use App\Models\Penimbanganbumil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bumil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bumilimunisasis()
    {
        return $this->hasMany(Imunisasibumil::class);
    }

    public function bumilvitamins()
    {
        return $this->hasMany(Vitaminbumil::class);
    }

    public function bumilpenimbangans()
    {
        return $this->hasMany(Penimbanganbumil::class);
    }
}
