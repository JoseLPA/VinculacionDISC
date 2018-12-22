<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadExtensionConvenioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_extension_convenio', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('actividad_extension_id')->unsigned();
            $table->integer('convenio_id')->unsigned();

            $table->timestamps();

            //Relaciones

            $table->foreign('actividad_extension_id')->references('id')->on('actividad_extensions')
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
        Schema::dropIfExists('actividad_extension_convenio');
    }
}
