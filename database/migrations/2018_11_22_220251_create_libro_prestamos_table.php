<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroPrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');

            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');

            $table->integer('id_libro')->unsigned();
            $table->foreign('id_libro')->references('id')->on('libros')->onDelete('cascade');

            $table->date('fecha_prestamo');
            $table->date('fecha_entrega');

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
        Schema::dropIfExists('libro_prestamos');
    }
}
