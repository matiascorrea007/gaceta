<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Compras_detalle;
use Soft\User;
use Soft\Provedore;

class Compra extends Model
{
    
protected $fillable = [
        	'id',
            'provedore_id',
            'user_id',
           	'pago_tipo',
           	'total',
           	'comentario',
           	'status',
            'entregado',
            'numero_factura',
            'gasto_envio',
            'ivatipo_id',
    ];



public function user()
    {
      //una compra corresponde a un usuario
        return $this->belongsTo(User::class);
    }

public function provedore()
    {
      //un compra corresponde a un provedor
        return $this->belongsTo(Provedore::class);
    }

public function transaction()
    {
      //una compra corresponde a muchas compra_detalles
         return $this->hasMany(Compras_detalle::class);
    }


}
