<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Presupuesto;

class Cliente extends Model
{

	protected $fillable = [
        	'id',
            'nombre',
            'apellido',
            'razonsocial',
            'user_id',
            'direccion',
            'telefono',
            'email',
            'observacion',    
            'provincia',
            'ciudad',
            'iva_id',
            'lista_precio',
            'cuit',
            'cp',
            'transporte_id',
            'habilitado',
            'cuentacorriente',
    ];
    		
public function presupuesto()
    {
        //un cliente puede tener muchos presupuesto
       return $this->hasMany(Presupuesto::class);
    }


public function venta()
    {
        //un cliente puede tener muchas ventas
       return $this->hasMany(Venta::class);
    }


public function transporte()
    {
        //un cliente puede tener un transporte
        return $this->belongsTo(Transporte::class);
    }


public function iva()
    {
        //un cliente puede tener un iva
        return $this->belongsTo(Iva::class);
    }


public function user()
    {
        //un cliente puede tener un usuario
        return $this->belongsTo(User::class);
    }

}
