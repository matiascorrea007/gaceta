<?php

namespace Soft;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Soft\Cliente;


class Factura extends Model
{

    protected $fillable = [
        	'id',
        	'cliente_id',
            'desde',
            'hasta',
            'pago_tipo',
            'comentario',
            'total',
            'status',
    ];

    protected $dates = [
            'desde',
            'hasta',
                
    ];



    public function cliente()
    {
      //una venta corresponde a un cliente
        return $this->belongsTo(Cliente::class);
    }


}
