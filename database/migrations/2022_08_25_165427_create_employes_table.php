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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string("nom_employe");
            $table->string("prenom_employe");
            $table->integer("groupe_employe");
            $table->string("statut_employe");
            $table->unsignedBigInteger('directions_id');
            $table->unsignedBigInteger('bureaux_id');
            $table->timestamps();

          //foreign keys
            $table->foreign('directions_id')->references('id')->on('directions')->onDelete('cascade');
            $table->foreign('bureaux_id')->references('id')->on('bureaux')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
       
    }
};
