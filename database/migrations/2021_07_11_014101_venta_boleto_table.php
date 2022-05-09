<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentaBoletoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_boleto', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('id_venta_boleto');
            $table->integer('boleto_vendido');
            $table->date('fecha_venta_boleto');
          

            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')->references('id')->on('persona');

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuario');

            $table->unsignedBigInteger('id_boleto');
            $table->foreign('id_boleto')->references('id')->on('boleto');

            $table->unsignedBigInteger('id_sala');
            $table->foreign('id_sala')->references('id')->on('sala');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_boleto');
    }
}
