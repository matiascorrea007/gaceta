<?php

namespace Soft;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Soft\Cliente;
use Soft\User;

class Factura extends Model
{

    protected $fillable = [
        	'id',
        	'cliente_id',
            'desde',
            'hasta',
            'pago_tipo',
            'comentario',
            'cantidad',
            'total',
            'status',
    ];

    protected $dates = [
            'desde',
            'hasta',
                
    ];



    public function cliente()
    {
      //una factura corresponde a un cliente
        return $this->belongsTo(Cliente::class);
    }

     public function user()
    {
      //una factura corresponde a un cliente
        return $this->belongsTo(User::class);
    }

}
