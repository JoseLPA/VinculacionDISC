<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoAprendizajeServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_aprendizaje_servicio', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('aprendizaje_servicio_id')->unsigned();
            $table->integer('academico_id')->unsigned();

            $table->timestamps();

            //Relaciones

            $table->foreign('aprendizaje_servicio_id')->references('id')->on('aprendizaje_servicios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('academico_id')->references('id')->on('academicos')
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
        Schema::dropIfExists('academico_aprendizaje_servicio');
    }
}
