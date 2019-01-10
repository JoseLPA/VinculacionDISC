<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContadorRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contador_registros', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('contador_convenio')->unsigned();
            $table->integer('contador_extension')->unsigned();
            $table->integer('contador_aprendizaje_servicio')->unsigned();
            $table->integer('contador_actividad_titulacion')->unsigned();
            $table->integer('contador_titulado')->unsigned();

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
        Schema::dropIfExists('contador_registros');
    }
}
