<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizajeServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizaje_servicios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre_asignatura',128);
            $table->string('nombre_profesor',128);
            $table->integer('cantidad_estudiantes');
            $table->string('nombre_socio',128);
            $table->integer('semestre');
            $table->integer('año');
            $table->string('evidencia',128);

            $table->integer('user_id')->unsigned();

            $table->timestamps();

            //relaciones

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('aprendizaje_servicios');
    }
}
