<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $fillable = [
        	'id',
        	'cliente_id',
            'lunes',
            'martes',
            'miercoles',
            'jueves',
            'viernes',
            'sabado',
            'domingo',
    ];
}
