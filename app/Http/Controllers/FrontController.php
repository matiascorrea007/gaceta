<?php

namespace Soft\Http\Controllers;
use Illuminate\Http\Request;
use Soft\Http\Requests;
use Auth;
use Counter;
use Soft\User;
use Soft\Producto;
use Soft\Provedore;
use Soft\Venta;
use Soft\Compra;

class FrontController extends Controller
{


    public function __construct()
    {
       
        
    }


    public function home()
    {

       //retornando una vista
       return view ('index');
    }
    
  

    public function admin()
    {
        
        $ventas = Venta::count();
        $compras = Compra::count();
        $productos = Producto::count();
        $users = User::count();
        $link = "deshboard";
        //$customers = Customer::count();
        //$suppliers = Supplier::count();
        //$receivings = Receiving::count();
        //$sales = Sale::count();
       
        return view('admin.index',compact('ventas','compras','productos','users','link'));
    }
    
}
