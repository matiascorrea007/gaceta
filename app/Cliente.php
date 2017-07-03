<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Presupuesto;
use Soft\Factura;


class Cliente extends Model
{

	protected $fillable = [
        	'id',
            'nombre',
            'apellido',
            'razonsocial',
            'direccion',
            'departamento',
            'telefono',
            'email',
            'observacion',    
            'cuit',
            'habilitado',
            'tipo',
            'lunes',
            'martes',
            'miercoles',
            'jueves',
            'viernes',
            'sabado',
            'domingo',
    ];
    		
public function presupuesto()
    {
        //un cliente puede tener muchos presupuesto
       return $this->hasMany(Presupuesto::class);
    }


public function factura()
    {
        //un cliente puede tener muchas ventas
       return $this->hasMany(Factura::class);
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
