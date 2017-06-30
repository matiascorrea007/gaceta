<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Compra;
use Soft\Producto;


class Compras_detalle extends Model
{
     protected $fillable = [
        'id',
        'compra_id',
        'producto_id',
        'user_id',
        'cantidad',
        'total_price',

    ];

 public function producto()
    {
      //una compra detalle corresponde a un producto
        return $this->belongsTo(Producto::class);
    }

public function Compra()
    {
      //una compra detalle corresponde a un Presupuesto
        return $this->belongsTo(Compra::class);
    }


}
