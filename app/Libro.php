<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';
   protected $guarded = [];

   protected $fillable = ['nombre', 'editorial', 'ano', 'ubicacion', 'autor', 'tipo','area_conocimiento','dias_prestamo'];
}
