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
        Schema::create('travailleurs', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('profession');
            $table->foreignId('secteur_id')->references('id')->on('secteurs');
            $table->foreignId('agent_id')->references('id')->on('agents');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('age');
            $table->string('sexe');
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
        Schema::dropIfExists('travailleurs');
    }
};
