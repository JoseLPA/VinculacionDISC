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

            $table->integer('cantidad_estudiantes');
            $table->string('nombre_socio',128);
            $table->integer('semestre');
            $table->integer('año');
            $table->string('evidencia',128);

            $table->integer('user_id')->unsigned();
            $table->integer('asignatura_id')->unsigned();
            $table->timestamps();

            //relaciones

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('asignatura_id')->references('id')->on('asignaturas')
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
