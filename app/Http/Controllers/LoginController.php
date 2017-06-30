<?php

namespace Soft\Http\Controllers;

use Soft\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Alert;
use Session;
use Redirect;
use Storage;
use Image;
class LoginController extends BaseController
{
     


      public function __construct(){
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



    public function logged(){
         //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();


         return view ('shop.logged',compact('total','cartcount'));

    }



     public function LoginRedirect()
    {
        return Redirect::back();
    }



}
