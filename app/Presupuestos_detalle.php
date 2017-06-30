<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Presupuesto;
use Soft\Producto;

class Presupuestos_detalle extends Model
{
   protected $fillable = [
        	'id',
        	'presupuesto_id',
            'producto_id',
            'user',
            'cantidad',
            'total_price',
           
        
    ];


 public function producto()
    {
      //una transaccion corresponde a un producto
        return $this->belongsTo(Producto::class);
    }

public function Presupuesto()
    {
      //una transaccion corresponde a un Presupuesto
        return $this->belongsTo(Presupuesto::class);
    }
}
