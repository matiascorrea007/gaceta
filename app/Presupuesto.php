<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Presupuestos_detalle;
use Soft\Producto;
use Soft\User;


class Presupuesto extends Model
{
   	protected $fillable = [
        	'id',
            'cliente_id',
            'user_id',
           	'pago_tipo',
           	'total',
           	'comentario',
           	'status',
    ];


    public function user()
    {
      //un presupuesto corresponde a un usuario
        return $this->belongsTo(User::class);
    }

public function cliente()
    {
      //un presupuesto corresponde a un cliente
        return $this->belongsTo(Cliente::class);
    }

public function transaction()
    {
      //un presupuesto corresponde a muchas presupuestos_detalles
         return $this->hasMany(Presupuestos_detalle::class);
    }



}
