<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoActividadExtensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_actividad_extension', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('academico_id')->unsigned();
            $table->integer('actividad_extension_id')->unsigned();

            $table->timestamps();

            //Relaciones

            $table->foreign('academico_id')->references('id')->on('academicos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('actividad_extension_id')->references('id')->on('actividad_extensions')
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
        Schema::dropIfExists('academico_actividad_extension');
    }
}
