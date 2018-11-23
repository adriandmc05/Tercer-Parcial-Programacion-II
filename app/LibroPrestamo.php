<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibroPrestamo extends Model
{
   protected $table = 'libro_prestamos';
   protected $guarded = [];

   protected $fillable = ['id_persona', 'id_empleado', 'id_libro', 'fecha_prestamo','fecha_entrega'];
}
