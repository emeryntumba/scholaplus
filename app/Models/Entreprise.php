<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    public function offre(){
        return $this->hasMany(Offre::class);
    }

    public function compteentreprise(){
        return $this->hasOne(CompteEntreprise::class);
    }
}
