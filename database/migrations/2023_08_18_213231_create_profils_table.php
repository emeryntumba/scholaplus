<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('prenom');
            $table->string('phone')->nullable();
            $table->enum('sexe', ['M', 'F']);
            $table->date('date_naissance');
            $table->string('niv_etude')->nullable();
            $table->string('niv_experience')->nullable();
            $table->string('ville');
            $table->string('adresse')->nullable();
            $table->longText('metier');
            $table->longText('secteur_activite');
            $table->longText('competences');
            $table->longText('langues');
            $table->longText('mobilite_geographique');
            $table->enum('situation_actuelle', ['recherche emploi', 'recherche stage', 'ouvert à des opportunités', 'freelance' ,'indisponible']);
            $table->longText('presentation')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
};
