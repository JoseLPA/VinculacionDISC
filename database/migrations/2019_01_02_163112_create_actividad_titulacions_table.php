<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTitulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_titulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_actividad',128);
            $table->string('nombre_estudiante',128);
            $table->integer('rut_estudiante');
            $table->string('carrera_estudiante');
            $table->date('fecha_inicio');
            $table->date('fecha_termino')->nullable();
            $table->string('evidencia');
            $table->integer('user_id')->unsigned();
            $table->integer('convenio_id')->unsigned();
            $table->integer('academico_id1')->unsigned();
            $table->integer('academico_id2')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('convenio_id')->references('id')->on('convenios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('academico_id1')->references('id')->on('convenios')
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
        Schema::dropIfExists('actividad_titulacions');
    }
}
