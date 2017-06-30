<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Compra;

class Provedore extends Model
{

	protected $fillable = [
        	'id',
        	'razonsocial',
            'contacto',
            'email',
            'skype',
            'direccion',
            'telefono',
            'dia_visita',
            'cuit',
            'observacion',
            'habilitado',
        
    ];
      
            
    public function compra()
    {
        //un provedor puede tener muchas Compras
       return $this->hasMany(Compra::class);
    }     
}
