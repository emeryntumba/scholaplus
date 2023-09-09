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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entreprise_id');
            $table->string('intitule');
            $table->string('annonce')->nullable();
            $table->enum('type_offre', ['stage academique', 'stage professionnel', 'emploi']);
            $table->longText('missions')->nullable(); //responsabilités
            $table->longText('connaissances')->nullable(); //connaissances techniques
            $table->string('niv_experience')->nullable();
            $table->string('niv_etude')->nullable();
            $table->string('metier');
            $table->string('region');
            $table->integer('nbr_poste');
            $table->string('type_contrat');
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');
            $table->timestamps();
            $table->date('expiration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
};
