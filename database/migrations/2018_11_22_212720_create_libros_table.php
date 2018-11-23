<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('editorial');
            $table->string('ano');
            $table->string('ubicacion');
            $table->string('autor');
            $table->enum('tipo',['normal','reserva']);
            $table->string('area_conocimiento');
            $table->string('dias_prestamo');

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
        Schema::dropIfExists('libros');
    }
}
