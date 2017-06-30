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


    public function index()
    {

       //retornando una vista
       return view ('admin.index');
    }
    
    public function welcome()
    {
       //retornando una vista
        return view ('welcome');
    }

    
     public function shop()
    {
       //retornando una vista
        return view ('shop.home');
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
