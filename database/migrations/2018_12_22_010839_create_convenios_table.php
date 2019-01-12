<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {
            $table->increments('id');//Se incrementa automaticamente

            $table->string('nombre_empresa',128);
            $table->enum('tipo', ['Capstone', 'Marco','Específico','A+S'])->default('Capstone');
            $table->date('fecha_inicio');
            $table->string('evidencia',128)->nullable();
            $table->integer('duracion')->nullable();

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
        Schema::dropIfExists('convenios');
    }
}
