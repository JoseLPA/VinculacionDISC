<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizajeServicioConvenioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizaje_servicio_convenio', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('aprendizaje_servicio_id')->unsigned();
            $table->integer('convenio_id')->unsigned();

            $table->timestamps();

            //Relaciones

            $table->foreign('aprendizaje_servicio_id')->references('id')->on('aprendizaje_servicios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('convenio_id')->references('id')->on('convenios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aprendizaje_servicio_convenio');
    }
}
