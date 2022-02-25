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
        Schema::create('regions_secteurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->references('id')->on('regions');
            $table->foreignId('secteur_id')->references('id')->on('secteurs');
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
        Schema::dropIfExists('regions_secteurs');
    }
};
