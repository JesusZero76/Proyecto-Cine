<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('id_pelicula');
            $table->date('fecha_pelicula');
            $table->time('hora_pelicula');
            $table->string('nombre_pelicula');
            $table->string('genero');
            $table->string('resumen');
            $table->double('precio');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula');
    }
}
