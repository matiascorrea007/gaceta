<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Soft\Http\Requests;
use Soft\User;
use Soft\Producto;
use Redirect;
use Auth;
use DB;
use Cart;
use Mail;
use Soft\Transaction;
use Soft\Venta;
use Soft\Cliente;
use Alert;
use Soft\web_venta;
use Soft\web_transaccione;
use Soft\Punto;
use Soft\Iva;
use Soft\Transporte;
use Newsletter;
use Input;
use Flash;
use MP;

class VentaController extends Controller
{

    public function __construct()
    {
        /*si no existe mi session cart , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('cart')) \Session::put('cart', array());
        //para cliente ya no es un array ya que almaceno 1 solo objeto
        if(!\Session::has('cliente')) \Session::put('cliente');
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
        $productos = producto::all();
        $clientes = Cliente::all();
        $users = User::all();
        $ivas=iva::lists('descripcion','id');
        $transportes=transporte::lists('descripcion','id');
         $link = "ventas";
        return view('admin.venta.index', compact('link','transportes','ivas','productos','clientes','users'));
    }


     public function checkout(Request $Request)
    {
        
        $punto = Punto::first();
        $user = User::find($Request['iduser']);
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
        $venta = new Venta();
        $venta->cliente_id    = $Request['idcliente'];
        $venta->user_id       = Auth::user()->id;
        $venta->pago_tipo     = $Request['tipo_pago'];
        $venta->pagoefectivo     = $Request['efectivo'];
        $venta->pagotargeta     = $Request['targeta'];
        $venta->total         = $Request['total_venta'];
        //$venta->comentario  =
        $venta->status = $tipo_pago;
        $venta->save();


        //sumar puntos al usuario
        if ($tipo_pago == "Efectivo" and $Request['iduser'] != null) {
        $user->puntos= ($user->puntos + (($punto->porcentaje*$venta->total)/100));
        $user->save();
        }
        

        //recorro el array de los option q son id de los productos

        $idarticulo = $Request->get('idarticulo');
        $cantidad = $Request->get('cantidad');
        $descuento = $Request->get('descuento');
        $precio_venta = $Request->get('precio_venta');
        $cont = 0;

        while($cont < count($idarticulo)){

            //crea una nueva transaccion
            $transaction  = new Transaction();
            $transaction->venta_id    = $venta->id;
            $transaction->producto_id  = $idarticulo[$cont];
            $transaction->user        = Auth::user()->nombre;
            $transaction->cantidad    = $cantidad[$cont];
            $transaction->total_price = $precio_venta[$cont]*$cantidad[$cont];
            $transaction->save();


            //descontamos stock
            $producto = producto::find($idarticulo[$cont]);
            $producto->stockactual = $producto->stockactual - $cantidad[$cont];
            $producto->save();
            

            $cont=$cont+1;    
        }


        //----------------------------------enviamos la factura por correo------------------------//
        $id = $venta->id;
        $transactions = transaction::all();
        $data = $ventas=venta::all();
        $date = date('Y-m-d');
        $vistaurl="admin.venta.venta-detalle-pdf";
        $logo = DB::table('web_logos')->first();
        $view =  \View::make($vistaurl, compact('data','logo', 'date', 'transactions','id'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);


   try{
            $vent = Venta::find($id);
         $asunto = "Gracias por su Compra en sharkinformatica - Factura de la compra";
         $cliente = Cliente::find($vent->cliente_id);
         
          \Mail::send('emails.invoice',['cliente'=>$cliente,'asunto'=>$asunto,] , function($message) use ($cliente,$asunto,$pdf)
       {
           //remitente
           $message->from('ventas@sharkinformatica.com','sharkinformatica','admin');
 
           //asunto
           $message->subject($asunto);
 
           //receptor
           $message->to($cliente->email, $cliente->nombre);

           //enviamos el pdf
           $message->attachData($pdf->output(), "factura.pdf");
 
       });

          //en caso de una exepcion
    }catch(\Swift_TransportException $e){
             flash('La venta se proceso correctamente pero no se pudo enviar la factura al correo devido a problemas con la conexion.')->error();
        }
        //----------------------------------enviamos la factura por correo------------------------//

         

       
        Alert::success('Mensaje existoso', 'Venta Creada Con Exito');
         return Redirect::to('venta-show');
    }
/*---------------------------------carrito--------------------------------------*/



 /*---------------------------------Listar Ventas--------------------------------------*/

    public function PagarFactura(request $request,$id){
     $link = "Realizar el Pago";   
    $venta = Venta::find($id);
    $total = (int)$venta->total;
    $cliente = Cliente::find($venta->cliente_id);
    //agregamos el porcentaje
    $porcentaje = DB::table('web_mercadopagos')->first();
    $nombre = $cliente->nombre;
    $email = $cliente->email;
    $mp = new MP("202272916517685", "LDi7fuJAGEX1MOtp27ufQr2kt64Jvu0q");

        
        
       
$preference_data = array(
    "items" => array(
        array(
            "id" => "Code",
            "title" => "Sharkinformatica",
            "currency_id" => "AR",
            "picture_url" =>"https://www.mercadopago.com/org-img/MP3/home/logomp3.gif",
            "description" => "Description",
            "category_id" => "Category",
            "quantity" => 1,
            "unit_price" => ((($total * $porcentaje->porcentaje)/100) + $total)
        )


    ),



    "payer" => array(
        "name" => "$nombre",
        "surname" => "$nombre",
        "email" => "$email",
        "date_created" => "2014-07-28T09:50:37.521-04:00",
        "phone" => array(
            "area_code" => "11",
            "number" => "4444-4444"
        ),
        "identification" => array(
            "type" => "DNI",
            "number" => "12345678"
        ),
        "address" => array(
            "street_name" => "Street",
            "street_number" => 123,
            "zip_code" => "1430"
        )
    ),


    "back_urls" => array(
        "success" => "http://sharkinformatica.com",
        "failure" => "http://sharkinformatica.com",
        "pending" => "http://sharkinformatica.com"
    ),


    "auto_return" => "approved",

    "payment_methods" => array(

        
        "installments" => 24,
        "default_payment_method_id" => null,
        "default_installments" => null,
    ),



    "shipments" => array(
        "receiver_address" => array(
            "zip_code" => "1430",
            "street_number"=> 123,
            "street_name"=> "Street",
            "floor"=> 4,
            "apartment"=> "C"
        )
    ),


    "notification_url" => "https://www.your-site.com/ipn",
    "external_reference" => "Reference_1234",
    "expires" => false,
    "expiration_date_from" => null,
    "expiration_date_to" => null
);

$preference = $mp->create_preference($preference_data);


        return view('admin.venta.pagar', compact('preference','link'));
    }







    public function listarVenta(request $request){


         $ventas=venta::orderBy('created_at','des')->paginate(50);
         $transactions = transaction::all();

         /*buscador*/
        $fechai=$request->input('fecha_inicio');
        $fechaf=$request->input('fecha_final');
        if (!empty($fechai) and !empty($fechaf)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $ventas = venta::where('created_at', '>=' , $fechai)->where('created_at', '<=', $fechaf)->paginate(50);
        }
        /*buscador*/

         $link = "listar ventas";

        return view('admin.venta.listar.index',compact('link','ventas','transactions'));
    }

    

    public function listarVentaWeb(request $request){


         $ventas= web_venta::orderBy('created_at','des');
         $transactions = web_transaccione::all();

         /*buscador*/
        $fechai=$request->input('fecha_inicio');
        $fechaf=$request->input('fecha_final');
        if (!empty($fechai) and !empty($fechaf)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $ventas = web_venta::where('created_at', '>=' , $fechai)->where('created_at', '<=', $fechaf)->paginate(50);
        }

        $user=$request->input('user');
        if (!empty($user)) {
                $ventas = web_venta::where('usuario','LIKE','%'.$user.'%');
        }
        /*buscador*/
        

        $ventas= $ventas->paginate(50);
         $link = "listar ventas web";

        return view('admin.venta.listar.ventas-web',compact('link','ventas','transactions')); 
        }


public function detalleVentaPdf($tipo,$id){
        $vistaurl="admin.venta.venta-detalle-pdf";
        $ventas=venta::all();
        $transactions = transaction::all();
         $logo = DB::table('web_logos')->first();
     return $this->crearPDF($logo,$ventas, $transactions , $vistaurl,$tipo,$id);
     
    }

    public function crearPDF($logo,$ventas, $transactions , $vistaurl,$tipo ,$id){
        
        $data = $ventas;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data','logo', 'date', 'transactions','id'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);


        
       if($tipo==1){return $pdf->stream('reporte');}
       if($tipo==2){return $pdf->download('reporte.pdf'); }
     
    }



    public function cambiarStatus(Request $Request , $id){
        //el descuento del stock lo realiza cuando finaliza la compra
        $transactions = Transaction::where('venta_id','=',$id)->get();
        $venta=venta::find($id);
        $cliente=Cliente::find($venta->cliente_id);
        $user = User::find($cliente->user_id);
        $punto = Punto::first();

          //si la accion es pagado  y se encuentra en estado cancelado que se sumen los puntos y descuente el stock
        if( $Request['pago'] == "pagado"  and  $venta->status == "cancelado" ){
         foreach ($transactions as $transaction) {
           //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual - $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //sumar puntos
            if($user != null){
            $user->puntos= ($user->puntos + (($punto->porcentaje*$venta->total)/100));
            $user->save();}
        }


         //si la accion es pagado  y se encuentra en estado pendiente que se sumen los puntos 
        if( $Request['pago'] == "pagado"  and  $venta->status == "pendiente" ){
         foreach ($transactions as $transaction) {
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //sumar puntos
            if($user != null){
            $user->puntos= ($user->puntos + (($punto->porcentaje*$venta->total)/100));
            $user->save();}
        }
       
        
        //si la accion es cancelado  y se encuentra en estado pagado que  resten  los puntos y restaure el stock
        if( $Request['pago'] == "cancelado"  and  $venta->status == "pagado" ){
         foreach ($transactions as $transaction) {
           //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual + $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //descontar puntos
            if($user != null){
            $user->puntos= ($user->puntos - (($punto->porcentaje*$venta->total)/100));
            $user->save();}
        }

        //si la accion es pendiente  y se encuentra en estado pagado que  resten  los puntos 
        if( $Request['pago'] == "pendiente"  and  $venta->status == "pagado" ){
         foreach ($transactions as $transaction) {
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //descontar puntos
            if($user != null){
            $user->puntos= ($user->puntos - (($punto->porcentaje*$venta->total)/100));
            $user->save();}
        }


        //si la accion es cancelado  y se encuentra en estado pendiente que  no sume nada y se recuepre el stock
        if( $Request['pago'] == "cancelado"  and  $venta->status == "pendiente" ){
         foreach ($transactions as $transaction) {
            //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual + $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}
        }


        //si la accion es pendiente  y se encuentra en estado cancelado que  no sume nada y se descuente el stock
        if( $Request['pago'] == "pendiente"  and  $venta->status == "cancelado" ){
         foreach ($transactions as $transaction) {
            //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual - $transaction->cantidad;
            $producto->save();
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}
        }


        return Redirect::to('/listar-venta');

    }

    public function cambiarStatusWeb(Request $Request , $id){
    //el descuento del stock lo realiza cuando finaliza la compra
        $transactions = web_transaccione::where('web_venta_id','=',$id)->get();
        $venta=web_venta::find($id);
        $user=User::find($venta->user_id);
        $punto = Punto::first();

     
        //si la accion es pagado  y se encuentra en estado cancelado que se sumen los puntos y descuente el stock
        if( $Request['pago'] == "pagado"  and  $venta->status == "cancelado" ){
         foreach ($transactions as $transaction) {
           //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual - $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //sumar puntos
            $user->puntos= ($user->puntos + (($punto->porcentaje*$venta->total)/100));
            $user->save();
        }


         //si la accion es pagado  y se encuentra en estado pendiente que se sumen los puntos (no se descuenta el stock por qeu ya se realiso al crear la venta)
        if( $Request['pago'] == "pagado"  and  $venta->status == "pendiente" ){
         foreach ($transactions as $transaction) {
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //sumar puntos
            $user->puntos= ($user->puntos + (($punto->porcentaje*$venta->total)/100));
            $user->save();
        }
       
        
        //si la accion es cancelado  y se encuentra en estado pagado que  resten  los puntos y restaure el stock
        if( $Request['pago'] == "cancelado"  and  $venta->status == "pagado" ){
         foreach ($transactions as $transaction) {
           //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual + $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //descontar puntos
            $user->puntos= ($user->puntos - (($punto->porcentaje*$venta->total)/100));
            $user->save();
        }

        //si la accion es pendiente  y se encuentra en estado pagado que  resten  los puntos  (no se descuenta el stock por qeu ya se realiso al crear la venta)
        if( $Request['pago'] == "pendiente"  and  $venta->status == "pagado" ){
         foreach ($transactions as $transaction) {
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}

            //descontar puntos
            $user->puntos= ($user->puntos - (($punto->porcentaje*$venta->total)/100));
            $user->save();
        }


        //si la accion es cancelado  y se encuentra en estado pendiente que  no sume nada y se recuepre el stock
        if( $Request['pago'] == "cancelado"  and  $venta->status == "pendiente" ){
         foreach ($transactions as $transaction) {
            //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual + $transaction->cantidad;
            $producto->save(); 
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}
        }


        //si la accion es pendiente  y se encuentra en estado cancelado que  no sume nada y se descuente el stock
        if( $Request['pago'] == "pendiente"  and  $venta->status == "cancelado" ){
         foreach ($transactions as $transaction) {
            //volve  stock en la tabla producto
            $producto = producto::find($transaction->producto_id);
            $producto->stockactual = $producto->stockactual - $transaction->cantidad;
            $producto->save();
            //cambiamos el estado de la venta
            $venta->status=$Request['pago'];
            $venta->save();}
        }

       

         return Redirect::to('/listar-venta-web');
    }

/*---------------------------------Listar Ventas--------------------------------------*/






}