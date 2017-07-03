<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $fillable = [
        	'id',
            'lunes',
            'martes',
           	'miercoles',
           	'jueves',
           	'viernes',
           	'sabado',
           	'domingo',
    ];
}
