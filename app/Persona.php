<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table = 'personas';
   protected $guarded = [];

   protected $fillable = ['nombre', 'apellido', 'edad', 'correo','password','tipo', 'id_libro'];

}
