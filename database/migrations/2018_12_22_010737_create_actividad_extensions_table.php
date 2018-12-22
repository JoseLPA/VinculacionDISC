<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_extensions', function (Blueprint $table) {
            $table->increments('id'); //Id que incrementa automaticamente

            $table->string('titulo_actividad',128);
            $table->string('nombre_expositor',128);
            $table->date('fecha');
            $table->string('ubicacion',128);
            $table->integer('cantidad_asistentes');
            $table->string('organizador_actividad',128);
            $table->string('evidencia',128);

            $table->integer('user_id')->unsigned();

            $table->timestamps();

            //Relaciones

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
        Schema::dropIfExists('actividad_extensions');
    }
}
