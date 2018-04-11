<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepMunicipalitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_municipalites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->unique();
            $table->integer('age');
            $table->string('profession');
            $table->enum('type', ['independant', 'parti politique']);
            $table->string('secteur');
            $table->string('niveau_academique');
            $table->integer('id_municipalite');
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
        Schema::dropIfExists('rep_municipalites');
    }
}
