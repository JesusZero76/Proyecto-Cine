<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('id_sala');
            $table->string('nombre_sala');
            $table->integer('numero_butacas');
          


            $table->unsignedBigInteger('id_pelicula');
            $table->foreign('id_pelicula')->references('id')->on('pelicula');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sala');
    }
}
