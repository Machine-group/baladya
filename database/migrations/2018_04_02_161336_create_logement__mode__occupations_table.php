<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogementModeOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logement__mode__occupations', function (Blueprint $table) {
            $table->integer('Code_Gov')->unique();
            $table->string('Nom_Delegation_Fr');
            $table->integer('Code_Delegation');
            $table->integer('Total');
            $table->integer('Total_occup');
            $table->integer('Total_secondaire');
            $table->integer('Total_vacants');
            $table->integer('Total_abandonne');
            $table->integer('Total_enConstruction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logement__mode__occupations');
    }
}
