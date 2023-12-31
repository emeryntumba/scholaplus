<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;


    public function profil(){
        return $this->belongsTo(Profil::class);
    }
    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }
}
