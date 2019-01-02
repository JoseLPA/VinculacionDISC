<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_asignaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academico_id')->unsigned();
            $table->integer('asignatura_id')->unsigned();
            $table->timestamps();

            $table->foreign('academico_id')->references('id')->on('academicos')
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
        Schema::dropIfExists('academico_asignaturas');
    }
}
