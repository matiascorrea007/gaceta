<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\User;
use Soft\Producto;
use Redirect;
use Auth;
use DB;
use Cart;
use Soft\Transaction;
use Soft\Compra;
use Soft\Compras_detalle;
use Soft\Cliente;
use Alert;
use Soft\web_venta;
use Soft\web_transaccione;
use Soft\Provedore;
use Soft\Ivatipo;

class CompraController extends Controller
{
    public function __construct()
    {
        /*si no existe mi session compracart , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('compracart')) \Session::put('compracart', array());
        //para provedor ya no es un array ya que almaceno 1 solo objeto
        if(!\Session::has('provedor')) \Session::put('provedor');
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
        $provedores = Provedore::all();
        $link = "compras";
        return view('admin.compra.index', compact('link','provedores','productos','ivatipos'));
    }

   

    //total del carrito
    private function total()
    {
        $compracart = \Session::get('compracart');
        $total = 0;
        foreach($compracart as $item){
            $total += $item->precioventa * $item->quantity;
        }
        return $total;
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
        $compra = new Compra();
        $compra->provedore_id    = $Request['idprovedor'];
        $compra->user_id       = Auth::user()->id;
        $compra->pago_tipo     = $Request['tipo_pago'];
        $compra->total         = $Request['total_compra'];
        $compra->comentario     =  $Request['comentario'];
        $compra->status = $tipo_pago;
        $compra->entregado = $Request['entregado'];
        $compra->numero_factura = $Request['numerofactura'];
        $compra->gasto_envio = $Request['gastoenvio'];
        $compra->ivatipo_id = $Request['iva_id'];
        $compra->created_at = $Request['emision'];
        $compra->save();


      

       $idarticulo = $Request->get('idarticulo');
        $cantidad = $Request->get('cantidad');
        $descuento = $Request->get('descuento');
        $precio_compra = $Request->get('precio_compra');
        
        $cont = 0;

        while($cont < count($idarticulo)){

    
            //crea una nueva transaccion
            $Compras_detalle  = new Compras_detalle();
            //alamacena la transaccion
            $Compras_detalle->compra_id    = $compra->id;
            $Compras_detalle->producto_id  = $idarticulo[$cont];
            $Compras_detalle->user        = Auth::user()->nombre;
            $Compras_detalle->cantidad    = $cantidad[$cont];
            $Compras_detalle->total_price = $precio_compra[$cont]*$cantidad[$cont];
            //guardo la transaccion
            $Compras_detalle->save();


            //si la compra fue entregada 
        $entregado=$Request['entregado'];

        if ($entregado == "Entregado") 
        {
            //aumentar stock y modificar el precio de compra de los producots
            $producto = producto::find($idarticulo[$cont]);
            $producto->stockactual = $producto->stockactual + $cantidad[$cont];
            $producto->preciocosto = $precio_compra[$cont];
            $producto->save();
        }

        $cont=$cont+1;    

            }
         

        Alert::success('Mensaje existoso', 'Compra Creada Con Exito');
        //redirecciona para destruir el carrito de la seccion
         return Redirect::to('compra-show');
    }
/*---------------------------------carrito--------------------------------------*/



 /*---------------------------------Listar Ventas--------------------------------------*/
    public function listarCompra(request $request){


         $compras=Compra::orderBy('id')->paginate(50);
         $transactions = Compras_detalle::all();

         /*buscador*/
        $fechai=$request->input('fecha_inicio');
        $fechaf=$request->input('fecha_final');
        if (!empty($fechai) and !empty($fechaf)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $compras = Compra::where('created_at', '>=' , $fechai)->where('created_at', '<=', $fechaf)->paginate(50);
        }
        /*buscador*/

        $link = "compras listar";
        return view('admin.compra.listar.index',compact('link','compras','transactions'));
    }

   

public function detalleCompraPdf($tipo,$id){
        $vistaurl="admin.compra.compra-detalle-pdf";
        $compras=compra::all();
        $transactions = Compras_detalle::all();
        $logo = DB::table('web_logos')->first();
     return $this->crearPDF($logo,$compras, $transactions , $vistaurl,$tipo,$id);
     
    }

    public function crearPDF($logo,$compras, $transactions , $vistaurl,$tipo ,$id){
        $data = $compras;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('logo','data', 'date', 'transactions','id'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
     
    }

    public function cambiarStatus(Request $Request , $id){
        $compra=Compra::find($id);
        $compra->status=$Request['pago'];
        $compra->save();

        //si se cancela la compra q la entrega tambien se cancele
        if($Request['pago'] == "cancelado"){
            $compra->entregado = "Cancelado";
            $compra->save();
        }
        return Redirect::to('listar-compra');
    }


        
public function cambiarEntrega(Request $Request , $id){
        $venta=Compra::find($id);
        $venta->entregado=$Request['pago'];
        $venta->save();


         //si la accion es Entregado  y se encuentra en estado cancelado que se sumen el stock
        if( $Request['pago'] == "Entregado"  and  $venta->status == "Cancelado" ){
         foreach ($transactions as $transaction) {
           //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual + $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            
        }


         //si la accion es Entregado  y se encuentra en estado pendiente que se sumen el stock
        if( $Request['pago'] == "Entregado"  and  $venta->status == "No Entregado" ){
         foreach ($transactions as $transaction) {
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual + $transaction->cantidad;
            $producto->save();
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            
        }
       
        
        //si la accion es Cancelado  y se encuentra en estado Entregado que  resten  el stock
        if( $Request['pago'] == "Cancelado"  and  $venta->status == "Entregado" ){
         foreach ($transactions as $transaction) {
           //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual - $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            
        }

        //si la accion es No Entregado  y se encuentra en estado Entregado  que se descuente el stock
        if( $Request['pago'] == "No Entregado"  and  $venta->status == "Entregado" ){
         foreach ($transactions as $transaction) {
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual - $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            
        }


        //si la accion es Cancelado  y se encuentra en estado No Entregado que  no sume nada 
        if( $Request['pago'] == "Cancelado"  and  $venta->status == "No Entregado" ){
         foreach ($transactions as $transaction) {
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}
        }


        //si la accion es No Entregado  y se encuentra en estado Cancelado que  que no aga nada
        if( $Request['pago'] == "No Entregado"  and  $venta->status == "Cancelado" ){
         foreach ($transactions as $transaction) {

            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}
        }

        return Redirect::to('listar-compra');
    }
        

    







}
