<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTituladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_titulado',128);
            $table->integer('rut_titulado');
            $table->integer('telefono')->nullable();
            $table->string('correo_electronico',128)->nullable();
            $table->string('empresa',128)->nullable();
            $table->integer('anio_titulacion')->unsigned();
            $table->string('carrera_estudiante',128);
            $table->string('evidencia',128);
            $table->integer('user_id')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('titulados');
    }
}
