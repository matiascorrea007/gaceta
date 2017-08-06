<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Illuminate\Support\Collection as Collection;


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
        $facturas = Factura::where('cliente_id','=',$cliente->id)->orderBy('id','desc');


         /*buscador*/
       

       if (!empty($request['fecha_inicio']) and !empty($request['fecha_final'])) {
                $fechai =  Carbon::parse($request['fecha_inicio']);
                $fechaf =  Carbon::parse($request['fecha_final']);

                 $facturas->where('desde', '>=' , $fechai)->where('hasta', '<=', $fechaf);
         }
        


        $facturas = $facturas->paginate(50);
        /*buscador*/

       //dd($facturas);


        

        //me compara todas las facturas con la fecha del updated_at en los intervalos que le pase
       //$facturas = Factura::where('status','=','pagado')->whereBetween('updated_at',array($fecha_desde,$fecha_hasta))->get();



         //$facturas = $facturas;


        
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

        //$facturas = Factura::where('cliente_id','=',$id)->first();
        //dd($facturas);
        $cliente = Cliente::find($id);
        $precios = Precio::first();


        $lunes =0;
        $martes = 0;
        $miercoles = 0;
        $jueves = 0;
        $viernes = 0;
        $sabado = 0;
        $domingo = 0;

        $cantLunes = 0;
        $cantMartes = 0;
        $cantMiercoles = 0;
        $cantJueves = 0;
        $cantViernes = 0;
        $cantSabado = 0;
        $cantDomingo = 0;

        //si mi cliente tiene el dias lunes para reparto que me traiga el precio del lunes de la gaceta
        if ($cliente->lunes == 1) {
            $lunes = $precios->lunes;
            $cantLunes = 1;
        }

        if ($cliente->martes == 1) {
            $martes = $precios->martes;
            $cantMartes = 1;
        }

        if ($cliente->miercoles == 1) {
            $miercoles = $precios->miercoles;
            $cantMiercoles = 1;
        }

        if ($cliente->jueves == 1) {
            $jueves = $precios->jueves;
            $cantJueves = 1;
        }

        if ($cliente->viernes == 1) {
            $viernes = $precios->viernes;
            $cantViernes = 1;
        }

        if ($cliente->sabado == 1) {
            $sabado = $precios->sabado;
            $cantSabado = 1;
        }
        if ($cliente->domingo == 1) {
            $domingo = $precios->domingo;
            $cantDomingo = 1;
        }
        

        if ($cliente->tipo == "semanal") {
            $total = $lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo;
            $diarioTotal = $cantLunes + $cantMartes + $cantMiercoles + $cantJueves + $cantViernes + $cantSabado + $cantDomingo;
            $desde =  Carbon::parse($request['desde']);
            //le sumo 6 dias a mi fecha de incio de la facturacion (facturacion mensual)
            $hasta = $desde->addDay(6);
            
        }

        if ($cliente->tipo == "mensuales") {
            //multiplco por 4 que son las 4 semanas del mes
            $total = ($lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo)*4;
            $diarioTotal = ($cantLunes + $cantMartes + $cantMiercoles + $cantJueves + $cantViernes + $cantSabado + $cantDomingo)*4;
            $desde =  Carbon::parse($request['desde']);
            //le sumo 6 dias a mi fecha de incio de la facturacion (facturacion mensual)
            $hasta = $desde->addDay(29);
            
        }

        if ($cliente->tipo == "quincenales") {
            //multiplco por 2 que son las 2 semanas de la quincena
            $total = ($lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo)*2;
            $diarioTotal = ($cantLunes + $cantMartes + $cantMiercoles + $cantJueves + $cantViernes + $cantSabado + $cantDomingo)*2;
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
            'cantidad'=>$diarioTotal,
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



    public function detalleFacturaPdf($tipo,$id){
        $vistaurl="admin.cliente.factura-detalle-pdf";
        $facturas=Factura::find($id);

     return $this->crearPDF($facturas, $vistaurl,$tipo);
     
    }

    public function detalleSeleccionFacturaPdf(Request $request,$tipo){

        $allfacturas =Factura::all();
 
        foreach ($allfacturas as $fac) {
            if ($fac->id == $request['check'.$fac->id]) {
                $misfacturas[] = $fac;
               
            }
        }

        $facturas = Collection::make($misfacturas);

        $vistaurl="admin.cliente.factura-detalle-seleccion-pdf";

     return $this->crearPDF($facturas, $vistaurl,$tipo);
     
    }

    public function crearPDF($facturas,$vistaurl,$tipo){
        
        //$data = $factura;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('facturas', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);


        
       if($tipo==1){return $pdf->stream('reporte');}
       if($tipo==2){return $pdf->download('reporte.pdf'); }
     
    }





    public function todasLasFacturas(){
        $facturas = Factura::orderBy('desde','asc')->get();
        $count = Factura::all()->count();
        return view('admin.facturas.index',compact('facturas','count'));
     }

      public function facturasPagadas(){
        $facturas = Factura::where('status','=','pagado')->orderBy('desde','asc')->get();
        $count = Factura::where('status','=','pagado')->count();
        return view('admin.facturas.listar.pagadas',compact('facturas','count'));
     }


      public function facturasPendientes(){
        $facturas = Factura::where('status','=','pendiente')->orderBy('desde','asc')->get();
        $count = Factura::where('status','=','pendiente')->count();
        return view('admin.facturas.listar.pendientes',compact('facturas','count'));
     }



}
