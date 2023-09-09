<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherProfil extends Model
{
    use HasFactory;

    function profil(){
        return $this->belongsTo(Profil::class);
    }
}
