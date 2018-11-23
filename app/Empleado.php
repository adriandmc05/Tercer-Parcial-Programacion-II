<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
   protected $guarded = [];

   protected $fillable = ['nombre', 'apellido', 'edad', 'correo' ,'password','tipo'];
}
