<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('apellido');
            $table->string('edad');
            $table->string('correo');
            $table->string('password');
             $table->string('tipo')->default('estudiante');
            $table->integer('id_libro')->unsigned()->nullable();
            $table->foreign('id_libro')->references('id')->on('libros');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
