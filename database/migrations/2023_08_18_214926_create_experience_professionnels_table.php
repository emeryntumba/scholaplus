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
        Schema::create('experience_professionnels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profil_id');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('intitule_poste');
            $table->string('nom_entreprise');
            $table->string('responsabilites')->nullable();
            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
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
        Schema::dropIfExists('experience_professionnels');
    }
};
