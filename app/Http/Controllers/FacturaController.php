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
        



        /*-----------------SEMANALES-----------------*/
        if ($cliente->tipo == "semanal") {
            $total = $lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo;
                if (!empty($request['recargo'])) {
                    $total = $total + $request['recargo'];
                }
             
            $diarioTotal = $cantLunes + $cantMartes + $cantMiercoles + $cantJueves + $cantViernes + $cantSabado + $cantDomingo;
            $desde =  Carbon::parse($request['desde']);
            //le sumo 6 dias a mi fecha de incio de la facturacion (facturacion mensual)
            $hasta = $desde->addDay(6);


            //generamos X 1 las facturas
            if ($request['generar'] == 1) {
            $desde =  Carbon::parse($request['desde']);
            //le sumo 6 dias a mi fecha de incio de la facturacion (facturacion mensual)
            $hasta = Carbon::parse($request['desde'])->addDay(6);

                //factura x1
                    $factura =   Factura::create([
                    'cliente_id' =>$id,
                    'desde' =>$desde->toDateString(),
                    'hasta'=>$hasta->toDateString(),
                    'pago_tipo'=>$request['pago_tipo'],
                    'comentario' =>$request['comentario'],
                    'cantidad'=>$diarioTotal,
                    'total' =>$total,
                    'status' =>"pendiente",
                    ]);  

                    Alert::success('Mensaje existoso', 'Factura Multiples Creado Correctamente');
                return Redirect::back();
                }



            //generamos X 4 las facturas
            if ($request['generar'] == 4) {
                $desde =  Carbon::parse($request['desde']);
                $hasta = Carbon::parse($request['desde'])->addDay(6);
             
                $desde2 = Carbon::parse($request['desde'])->addDay(7);
                $hasta2 = Carbon::parse($request['desde'])->addDay(13);

                $desde3 = Carbon::parse($request['desde'])->addDay(14);
                $hasta3 = Carbon::parse($request['desde'])->addDay(20);

                $desde4 = Carbon::parse($request['desde'])->addDay(21);
                $hasta4 = Carbon::parse($request['desde'])->addDay(27);
                
               
            
                    //factura x1
                    $factura =   Factura::create([
                    'cliente_id' =>$id,
                    'desde' =>$desde->toDateString(),
                    'hasta'=>$hasta->toDateString(),
                    'pago_tipo'=>$request['pago_tipo'],
                    'comentario' =>$request['comentario'],
                    'cantidad'=>$diarioTotal,
                    'total' =>$total,
                    'status' =>"pendiente",
                    ]);  


                    //factura x2
                    $factura =   Factura::create([
                    'cliente_id' =>$id,
                    'desde' =>$desde2->toDateString(),
                    'hasta'=>$hasta2->toDateString(),
                    'pago_tipo'=>$request['pago_tipo'],
                    'comentario' =>$request['comentario'],
                    'cantidad'=>$diarioTotal,
                    'total' =>$total,
                    'status' =>"pendiente",
                    ]); 

                    //factura x3
                    $factura =   Factura::create([
                    'cliente_id' =>$id,
                    'desde' =>$desde3->toDateString(),
                    'hasta'=>$hasta3->toDateString(),
                    'pago_tipo'=>$request['pago_tipo'],
                    'comentario' =>$request['comentario'],
                    'cantidad'=>$diarioTotal,
                    'total' =>$total,
                    'status' =>"pendiente",
                    ]); 

                    //factura x4
                    $factura =   Factura::create([
                    'cliente_id' =>$id,
                    'desde' =>$desde4->toDateString(),
                    'hasta'=>$hasta4->toDateString(),
                    'pago_tipo'=>$request['pago_tipo'],
                    'comentario' =>$request['comentario'],
                    'cantidad'=>$diarioTotal,
                    'total' =>$total,
                    'status' =>"pendiente",
                    ]);  

                
                 Alert::success('Mensaje existoso', 'Factura Multiples Creado Correctamente');
                return Redirect::back();
                }
            
        }




        /*-----------------MENSUAL y QUINCENALES-----------------*/
        if ($cliente->tipo == "mensuales" or $cliente->tipo == "quincenales") {

            $desde =  Carbon::parse($request['desde']);
            $hasta =  Carbon::parse($request['hasta']);
            //le sumamos un dia ya que me toma un dia de menos
            $hasta=$hasta->addDay();

            //array de todos los dias , la posicion 0 es el lunes , la 1 es el martes y asi ...
            $fecha=[0,0,0,0,0,0,0];
        
            $actual=$desde->copy();

            //al hacer $actual->addDay(); sumo los dias para que cuando llegue con el dia actual no aiga diferencia
            //por lo tanto no sera mayor que cero y termina el bucle
            while ($actual->diffInDays($hasta)>0){
                //$actual->dayOfWeek me devuelve el dia de la semana
                

                if($actual->dayOfWeek == Carbon::MONDAY ){
                      $fecha[0] = $fecha[0]+1;  
                }

                if($actual->dayOfWeek == Carbon::TUESDAY ){
                      $fecha[1] = $fecha[1]+1;  
                }

                if($actual->dayOfWeek == Carbon::WEDNESDAY ){
                      $fecha[2] = $fecha[2]+1;  
                }
                if($actual->dayOfWeek == Carbon::THURSDAY ){
                      $fecha[3] = $fecha[3]+1;  
                }
                if($actual->dayOfWeek == Carbon::FRIDAY ){
                      $fecha[4] = $fecha[4]+1;  
                }
                if($actual->dayOfWeek == Carbon::SATURDAY ){
                      $fecha[5] = $fecha[5]+1;  
                }
                if($actual->dayOfWeek == Carbon::SUNDAY ){
                      $fecha[6] = $fecha[6]+1;  
                }
                   
                
                //esto es para terminar el while , al llegar a ser igual q cero termina
                $actual->addDay();
                }

                //restamos de nuevo el dia
                $hasta=$hasta->addDay(-1);
                
       
            //multiplco los dias por la cantidad de ese dia
            $total = ($lunes*$fecha[0]) + ($martes*$fecha[1]) + ($miercoles*$fecha[2]) + ($jueves*$fecha[3]) + ($viernes*$fecha[4]) + ($sabado*$fecha[5]) + ($domingo*$fecha[6]);
            $diarioTotal = ($cantLunes*$fecha[0]) + ($cantMartes*$fecha[1]) + ($cantMiercoles*$fecha[2]) + ($cantJueves*$fecha[3]) + ($cantViernes*$fecha[4]) + ($cantSabado*$fecha[5]) + ($cantDomingo*$fecha[6]);
            
            //agrega el recargo
            if (!empty($request['recargo'])) {
                    $total = $total + $request['recargo'];
                }
           
            
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
