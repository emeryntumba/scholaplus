<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function experienceprofessionnel(){
        return $this->hasMany(ExperienceProfessionnel::class);
    }

    public function formation(){
        return $this->hasMany(Formation::class);
    }

    public function cv(){
        return $this->hasMany(CV::class);
    }

    public function etudiant(){
        return $this->hasOne(Etudiant::class);
    }

    public function otherprofil(){
        return $this->hasOne(OtherProfil::class);
    }

    public function candidature(){
        return $this->hasMany(Candidature::class);
    }
}
