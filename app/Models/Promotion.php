<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    public function universite(){
        return $this->belongsTo(Universite::class);
    }

    public function etudiant(){
        return $this->hasMany(Etudiant::class);
    }
}
