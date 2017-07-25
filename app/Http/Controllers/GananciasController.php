<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;


use Soft\Cliente;
use Soft\Precio;
use Soft\Reparto;
use Soft\Factura;
use Carbon\Carbon;
use Session;
use Redirect;
use Alert;
use Soft\User;
use Soft\Dia;
use DB;
use Flash;
use Storage;
use Image;
use Auth;
use Input;

class GananciasController extends Controller
{
    

    public function index()
    {
       

        $hoy = new Carbon();
        $link = "Ganancias";
        return view('admin.ganancias.index',compact('link'));
   
    }


    public function gananciaCalcular(Request $request)
    {
       //$facturas = Factura::where('status','=','pagada')->get();
        $fecha_desde =  Carbon::parse($request['fecha_desde']);
        $fecha_hasta =  Carbon::parse($request['fecha_hasta']);

        //me compara todas las facturas con la fecha del updated_at en los intervalos que le pase
       $facturas = Factura::where('status','=','pagado')->whereBetween('updated_at',array($fecha_desde,$fecha_hasta))->get();

       $total = 0;
        foreach ($facturas as $factura) {
            $total = $total + $factura->total ;
        }
        
        
        $link = "Ganancias";
        
       
      

       
               return view('admin.ganancias.index',compact('link','facturas','total'));
        

    }


}
