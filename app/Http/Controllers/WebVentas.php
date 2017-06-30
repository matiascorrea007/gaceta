<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Soft\Http\Requests;
use Soft\Producto;
use Session;
use Soft\web_venta;
use DB;
use Redirect;
use Alert;
use Auth;
use Soft\user_facturacion;
use Soft\web_transaccione;
use Soft\web_mercadopago;
use Soft\Punto;
use Soft\Cliente;
use Soft\User;
use Exception;
use MP;


class WebVentas extends BaseController
{

    public function __construct()
    {
        /*si no existe mi session cart , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('cartweb')) \Session::put('cartweb', array());
        if(!\Session::has('newcartweb')) \Session::put('newcartweb', array());
        //para cliente ya no es un array ya que almaceno 1 solo objeto
        if(!\Session::has('cliente')) \Session::put('cliente');

        parent::__construct();
    }

    public function CartCount(){
        /*obtengo mi variable de session cart que cree y la almaceno en $cart */
        $cart = \Session::get('cartweb');
        //cuenta los item que hay en la session
        $cartcount =  count($cart);

        return $cartcount;
    }

   
    public function show()
    {
        
        /*obtengo mi variable de session cart que cree y la almaceno en $cart */
        $cart = \Session::get('cartweb');
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        /*obtengo mi variable de session cliente que cree y la almaceno en $cart */
        $cliente = \Session::get('cliente');
        //llama a la funcion total
        $total = $this->total();


         
        return view('shop.cart', compact('cartcount','cart','total','cliente'));
    }


    //agregar item
    public function add(Request $request,$id)
    {
      
       //si es una peticion ajax
        if ($request->ajax()) {
            
        $itemadd  = producto::find($id);
        $cart = \Session::get('cartweb');
        $itemadd->quantity = 1;

        $cart[] = $itemadd;
        \Session::put('cartweb', $cart);

         /*obtengo mi variable de session cart que cree y la almaceno en $cart */
        $cart = \Session::get('cartweb');
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();

            return response([$total,$cartcount,$cart]);
        }

     }

     // Delete item y client
    public function delete(Request $request,$id)
    {
       

      
      //si es una peticion ajax
        if ($request->ajax()) {
            
        $item  = producto::find($id);
        $cart = \Session::get('cartweb');
        $newcart = [];


        //reccorro todos los items del carrito
        //key es la posicion del array
        $i=0;
        foreach ($cart as $key => $car) {
          
          //si el id del producto es igual al id que mandamos que me borre ese prodcuto del carrito
       if ($car->id == $id) {
         unset($cart[$key]);
       }else{
         //los paso a una nueva session para que queden acomodados y no tire error en el JS
        $newcart[$i] = $cart[$key];
       $i = $i + 1;
       }
     }
        

        \Session::put('cartweb', $newcart);



         /*obtengo mi variable de session cart que cree y la almaceno en $cart */
        $newarray = \Session::get('cartweb');
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();

            return response([$total,$cartcount,$newarray]);
        }


    }


     // Update item
    public function update(Request $request,$id, $cantidad)
    {
       

       if ($request->ajax()) {
        $item  = producto::find($id);
        $cart = \Session::get('cartweb');
        foreach ($cart as $key => $car) {
          if ($car->id == $id) {
            $cart[$key]->quantity = $cantidad;
          }       
        }
       
        \Session::put('cartweb', $cart);

       /*obtengo mi variable de session cart que cree y la almaceno en $cart */
        $cart = \Session::get('cartweb');
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();
       
       return response([$total,$cartcount,$cart]);
       }
    }


    //limpiar carrito y cliente
     public function trash()
    {
        \Session::forget('cartweb');
        \Session::forget('cliente');
        
        return Redirect::back();
    }


    //total del carrito
    private function total()
    {
        $cart = \Session::get('cartweb');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precioventa * $item->quantity;
        }
        return $total;
    }




 public function CheckoutStep1()
    { 
      //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();



        if (!Auth::guest()){
            return Redirect::to('checkout-step-2');
        }else{
            return view('shop.checkout', compact('total','cartcount'));
        }
        
    }




    public function CheckoutStep2()
    {
      //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();


        $datosfacturacions =  DB::table('user_facturacions')->where( 'user_id', '=',Auth::user()->id)->first();
        return view('shop.checkout-step2', compact('datosfacturacions','total','cartcount'));
    }




    public function CheckoutStep3()
    {
      //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();
      
        return view('shop.checkout-step3', compact('total','cartcount'));
    }




    public function CheckoutStep4(request $request)
    { 
  
           

      if ($request['transporte'] == null) {
           return Redirect::to('checkout-step-3');
      }else{


      //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();


      //guardamos el transporte elejido en el paso anterior
      if ($request['transporte'] == 1) {
      $transporte="retiro en nuestro local";
      }
      if ($request['transporte'] == 2) {
      $transporte="Envio a domicilio por oca";
      }
      if ($request['transporte'] == 3) {
      $transporte="Envio Express";
      }


        return view('shop.checkout-step4', compact('transporte','total','cartcount'));

        }
    

    }






    public function CheckoutStep5(request $request)
    { 

    
      if($request['transporte'] == null and $request['pago'] == null ){
            return Redirect::to('checkout-step-3');
      }else{
      //mercadopago
       $mercadopago=web_mercadopago::first();
      
      //usuario
       $user= Auth::user();

      //datos de facturacion
      $facturacion =  DB::table('user_facturacions')->where( 'user_id', '=',Auth::user()->id)->first();
      
      //le mandamos los items del carrito
      $carts = \Session::get('cartweb');

      //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();

      //transporte
       $transporte = $request['transporte'];

       //guardamos el metodo de pago del paso anterior
      if ($request['pago'] == 1) {
      $TipoPago="Mercadopago";
      }
      if ($request['pago'] == 2) {
      $TipoPago="Desposito bancario";
      }
     

        return view('shop.checkout-step5', compact(
                                          'transporte',
                                          'TipoPago',
                                          'total',
                                          'cartcount',
                                          'carts',
                                          'user',
                                          'facturacion',
                                          'mercadopago'
                                          ));
        }
    }





public function CheckoutStep6(request $request)
    { 

       if($request['transporte'] == null and $request['pago'] == null ){
            return Redirect::to('checkout-step-3');
      }else{


      //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
      //llama a la funcion total
        $total = $this->total();
        $totalaux = $total;

       //transporte
       $transporte = $request['transporte'];

       //tipo de pago
       $TipoPago= $request['TipoPago'];

        
    
        //genero una venta que estara relacinada con los productos en las transacciones
        $venta = new web_Venta();
        $venta->user_id       = Auth::user()->id;
        $venta->usuario         = Auth::user()->nombre;
        $venta->pago_tipo     = $TipoPago;
        $venta->transporte    = $transporte;
        $venta->total         = $total;
        //$venta->comentario  =
        $venta->status = "pendiente";
        $venta->save();

        //traigo todos los productos de la session  del usuario 
        $cart = \Session::get('cartweb');
        //los recorro
        foreach ($cart as $item) {
            //crea una nueva transaccion
            $transaction  = new web_transaccione();
            //alamacena la transaccion
            $transaction->web_venta_id    = $venta->id;
            $transaction->producto_id  = $item->id;
            $transaction->user        = Auth::user()->nombre;
            $transaction->cantidad    = $item->quantity;
            $transaction->total_price = $item->precioventa * $item->quantity;
            //guardo la transaccion
            $transaction->save();

            //descontar stock en la tabla producto
            $producto = producto::find($item->id);
            $producto->stockactual = $producto->stockactual - $item->quantity;
            $producto->save();
        }   

        //limpiamos el carrito
        \Session::forget('cartweb');
       


  //agregamos el porcentaje
  $porcentaje = DB::table('web_mercadopagos')->first();




//require_once "../lib/mercadopago.php";
//esto es para que ande en el hosting require_once "../public_html/laravel/lib/mercadopago.php";

$nombre = Auth::user()->nombre;
$email = Auth::user()->email;

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
            "unit_price" => ((($totalaux * $porcentaje->porcentaje)/100) + $totalaux)
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


        return view('shop.checkout-step6', compact('totalaux','total','cartcount','preference'));
      }
    }





/*---------------------------------carrito--------------------------------------*/





}