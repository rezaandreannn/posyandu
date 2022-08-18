<?php

namespace App\Models;

use App\Models\Bumil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imunisasibumil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = 'bumil';

    const NAMAIMUNISASI = ['MMR', 'TT', 'DPT', 'Hepatitis A', 'Hepatitis B'];

    public function bumil()
    {
        return  $this->belongsTo(Bumil::class);
    }
}
