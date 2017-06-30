<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Soft\Http\Requests;
use Soft\User;
use Soft\Producto;
use Soft\ProductosAdd;
use Redirect;
use Auth;
use DB;
use Cart;
use Soft\Transaction;
use Soft\Venta;
use Soft\Cliente;
use Soft\Presupuesto;
use Soft\Presupuestos_detalle;
use Alert;
use Soft\Ivatipo;

class PresupuestoController extends Controller
{

    public function __construct()
    {
        /*si no existe mi session cart , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('presupuesto')) \Session::put('presupuesto', array());
        //para cliente ya no es un array ya que almaceno 1 solo objeto
        if(!\Session::has('cliente_presupuesto')) \Session::put('cliente_presupuesto');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*---------------------------------carrito--------------------------------------*/
   
    //mostrar carrito
    public function show()
    {
        //mandamos los ivastipos
         $ivatipos=ivatipo::lists('descripcion','descripcion');
        $productos = producto::all();
        $clientes = Cliente::all();
        $link= "presupuesto";

        return view('admin.presupuesto.index', compact('link','productos','clientes','ivatipos'));
    }

   

     public function checkout(Request $Request)
    {
        //traigo el tipo de pago y si es efectivo que se guarde como pagado en otro caso 
        //que se guarde como pendiente
        $tipo_pago=$Request['tipo_pago'];
        if ($tipo_pago == "Efectivo") 
        {
            $tipo_pago = "pagado";
        }else{  
            $tipo_pago="pendiente";            
        }

        //genero una venta que estara relacinada con los productos en las transacciones
        $presupuesto = new presupuesto();
        $presupuesto->cliente_id    = $Request['idcliente'];
        $presupuesto->user_id       = Auth::user()->id;
        $presupuesto->pago_tipo     = $Request['tipo_pago'];
        $presupuesto->total         = $Request['total_venta'];
        //$venta->comentario  =
        $presupuesto->status = $tipo_pago;
        $presupuesto->save();

        //traigo todos los productos de la session  del usuario 
       
        $idarticulo = $Request->get('idarticulo');
        $cantidad = $Request->get('cantidad');
        $descuento = $Request->get('descuento');
        $precio_venta = $Request->get('precio_venta');
        $cont = 0;

        while($cont < count($idarticulo)){
            //crea una nueva transaccion
            $transaction  = new presupuestos_detalle();
            //alamacena la transaccion
            $transaction->presupuesto_id    = $presupuesto->id;
            $transaction->producto_id  = $idarticulo[$cont];
            $transaction->user        = Auth::user()->nombre;
            $transaction->cantidad    = $cantidad[$cont];
            $transaction->total_price = $precio_venta[$cont]*$cantidad[$cont];
            //guardo la transaccion
            $transaction->save();

          $cont=$cont+1;  
        }   
            Alert::success('Mensaje existoso', 'Presupuesto Creada Con Exito');
        //redirecciona para destruir el carrito de la seccion
         return Redirect::to('presupuesto-show');
    }
/*---------------------------------carrito--------------------------------------*/



 /*---------------------------------Listar presupuestos--------------------------------------*/
    public function listarPresupuestos(){
         $presupuestos=presupuesto::orderBy('created_at','des')->paginate(50);
         $transactions = presupuestos_detalle::all();
         $link = "presupuesto listar";

        return view('admin.presupuesto.listar.presupuesto',compact('link','transactions','presupuestos'));
     
    }


public function detallePresupuestoPdf($tipo,$id){
        $vistaurl="admin.presupuesto.presupuesto-detalle-pdf";
        $presupuestos=presupuesto::all();
        $transactions = presupuestos_detalle::all();
        $logo = DB::table('web_logos')->first();

     return $this->crearPDF($logo,$presupuestos, $transactions , $vistaurl,$tipo,$id);
     
    }

    public function crearPDF($logo,$presupuestos, $transactions , $vistaurl,$tipo ,$id){
        $data = $presupuestos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data','logo', 'date', 'transactions','id'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
     
    }

/*---------------------------------Listar presupuestos--------------------------------------*/










}
