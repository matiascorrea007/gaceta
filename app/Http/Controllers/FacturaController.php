<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;

use Carbon\Carbon;
use Soft\Cliente;
use Soft\Precio;
use Soft\Factura;
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


class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {

         $link = "clientes";
       $cliente = Cliente::find($id);

       //que me traiga las facturas de ese cliente
        $facturas = Factura::where('cliente_id','=',$cliente->id)->get();
        
       // $dtToronto = Carbon::createFromDate(2017, 6, 12, 'America/Toronto');
        //dd($dtToronto->between($facturas->desde, $facturas->hasta));
        return view('admin.cliente.factura',compact('facturas','link','cliente'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {   

        $facturas = Factura::where('cliente_id','=',$id)->first();
        $cliente = Cliente::find($id);
        $dias = Dia::where('cliente_id','=',$id)->first();
        $precios = Precio::first();


        $lunes =0;
        $martes = 0;
        $miercoles = 0;
        $jueves = 0;
        $viernes = 0;
        $sabado = 0;
        $domingo = 0;


        if ($dias->lunes == 1) {
            $lunes = $precios->lunes;
        }

        if ($dias->martes == 1) {
            $martes = $precios->martes;
        }

        if ($dias->miercoles == 1) {
            $miercoles = $precios->miercoles;
        }

        if ($dias->jueves == 1) {
            $jueves = $precios->jueves;
        }

        if ($dias->viernes == 1) {
            $viernes = $precios->viernes;
        }

        if ($dias->sabado == 1) {
            $sabado = $precios->sabado;
        }
        if ($dias->domingo == 1) {
            $domingo = $precios->domingo;
        }
        

        if ($cliente->tipo == "semanal") {
            $total = $lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo;
            $desde =  Carbon::parse($request['desde']);
            //le sumo 6 dias a mi fecha de incio de la facturacion (facturacion mensual)
            $hasta = $desde->addDay(6);
            
        }

        if ($cliente->tipo == "mensuales") {
            $total = ($lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo)*4;
            $desde =  Carbon::parse($request['desde']);
            //le sumo 6 dias a mi fecha de incio de la facturacion (facturacion mensual)
            $hasta = $desde->addDay(29);
            
        }

        if ($cliente->tipo == "quincenales") {
            $total = ($lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo)*2;
            $desde =  Carbon::parse($request['desde']);
            //le sumo 6 dias a mi fecha de incio de la facturacion (facturacion mensual)
            $hasta = $desde->addDay(13);
            
        }


        $factura =   Factura::create([
            'cliente_id' =>$id,
            'desde' =>$request['desde'],
            'hasta'=>$hasta->toDateString(),
            'pago_tipo'=>$request['pago_tipo'],
            'comentario' =>$request['comentario'],
            'total' =>$total,
            'status' =>"pendiente",
            ]);



        Alert::success('Mensaje existoso', 'Factura Creado Correctamente');
         
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura=Factura::find($id);
        $factura->delete();
        
        //le manda un mensaje al usuario
        Alert::success('Mensaje existoso', 'Factura Eliminada'); 
         return Redirect::back();
    }









     public function cambiarStatus(Request $Request , $id){
        
        $factura=Factura::find($id);
        $cliente=Cliente::find($factura->cliente_id);
        
        //cambiamos el estado de la venta
        $factura->status=$Request['pago'];
        $factura->save();

        return Redirect::back();

    }



}
