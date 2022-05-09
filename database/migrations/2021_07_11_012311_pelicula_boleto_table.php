<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeliculaBoletoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_boleto', function (Blueprint $table) {
            $table->id();
            

            //$table->bigIncrements('id_pelicula_boleto');

            $table->unsignedBigInteger('id_pelicula');
            $table->foreign('id_pelicula')->references('id')->on('pelicula');

            $table->unsignedBigInteger('id_boleto');
            $table->foreign('id_boleto')->references('id')->on('boleto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula_boleto');
    }
}
