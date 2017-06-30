<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\webpost;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Soft\Producto;
use Soft\Producto_Imagen;
use Soft\Categoria;
use Soft\Review;
use Soft\Categoriasub;

class PaginasController extends BaseController
{

  public function __construct(){

    /*si no existe mi session cart , esntonces la creo con put y creo
        un array para almacenar los items*/
    if(!\Session::has('cartweb')) \Session::put('cartweb', array());
    //para cliente ya no es un array ya que almaceno 1 solo objeto
     if(!\Session::has('cliente')) \Session::put('cliente');

       parent::__construct();
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


  public function CartCount(){
        /*obtengo mi variable de session cart que cree y la almaceno en $cart */
        $cart = \Session::get('cartweb');
        //cuenta los item que hay en la session
        $cartcount =  count($cart);

        return $cartcount;
    }


     public function post()
    {
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();

        $posts=webpost::paginate(10);
       
         return view ('shop.blog',compact('cartcount',
                                          'posts',
                                          'total'
                                          ));
    }

 public function postDetalle($id)
    {
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();

        $post=webpost::find($id);
        return view('shop.blog-details',compact('cartcount','post','total'));
    }


    public function Home(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();

         /*productos*/
          $nuevos=producto::where('hot','=',null)->orderBy('created_at','des')->where('habilitado','=',1)->take(10)->get();
          $hots=producto::where('hot','=',1)->where('habilitado','=',1)->take(10)->get();
          $sales=producto::where('precioventa','>=',1500)->where('habilitado','=',1)->take(10)->get();
         return view ('shop.home',compact('cartcount','total','nuevos','hots','sales'));


    }
    


  public function itemDetalle($slug){
    //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();


        $itemdetalle = producto::where('slug','=', $slug)->firstOrFail();
        //$itemdetalle=producto::find($id);
        $imagens= Producto_imagen::where('producto_id', '=',$itemdetalle->id)->get();
        

        /*productos Relacionados*/
        $productosRelacionados=producto::where('categoria_id','=',$itemdetalle->categoria_id)->orderBy('created_at','des')->where('habilitado','=',1)->take(30)->get();

        // Get all reviews that are not spam for the product and paginate them
        $reviews = Review::where('producto_id','=',$itemdetalle->id)->where('approved','=',1)->orderBy('created_at','desc')->paginate(100);
        $urlimagen = str_replace(" ","%20",$itemdetalle->imagen1);
  
 
        return view('shop.detail2',compact('cartcount',
                                          'itemdetalle',
                                          'imagens',
                                          'total',
                                          'reviews',
                                          'urlimagen',
                                          'productosRelacionados'
                                          ));

    }






     public function subcategoria($slug){
      //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();


        //obtengo el id de la sub categoria
        $subcateriaid = DB::table('categoriasubs')->where('slug','=',$slug)->first();
        
        $itemdetalles=producto::where('categoriasub_id','=',$subcateriaid->id)->where('habilitado','=',1);
        $itemdetalles = $itemdetalles->paginate(15);
        
        return view('shop.category',compact('cartcount','itemdetalles','total'));

    }








public function PreguntasFrecuentes(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();

         return view ('shop.preguntasfrecuentes',compact('cartcount','total'));
    }






public function FormasDePago(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();

         return view ('shop.formasdepago',compact('cartcount','total'));
    }






public function garantia(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();


         return view ('shop.garantia',compact('cartcount','total'));
    }






public function AvisoLegal(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();


         return view ('shop.avisolegal',compact('cartcount','total'));
    }






    public function envios(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();

         return view ('shop.envios',compact('cartcount','total'));
    }








public function ubicacion(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();
         
         return view ('shop.ubicacion',compact('cartcount','total'));
    }





public function contacto(){
        //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();
  
         return view ('shop.contacto',compact('cartcount','total'));
    }




}
