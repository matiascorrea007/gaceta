<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;

use Carbon\Carbon;
use Soft\Cliente;
use Soft\Precio;
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



class RepartoController extends Controller
{
    
    public function index()
    {
       
        $hoy = new Carbon();
        $link = "reparto";
        return view('admin.reparto.index',compact('link'));
   
    }


    public function repartoCalcular(Request $request)
    {
        $fechaingresada = $request['fecha'];
        $link = "reparto";
        $fecha =  Carbon::parse($request['fecha']);
      

          //pregunto que si la fecha ingresada es lunes entonces me devuelva el reparto del lunes                  
           if ($fecha->dayOfWeek == Carbon::MONDAY) {
               $clientes = Cliente::where('lunes','=',1)->orderBy('direccion','asc')->get();
               $dia = "Lunes";
               return view('admin.reparto.index',compact('link','clientes','dia','fechaingresada'));
           } 

           if ($fecha->dayOfWeek == Carbon::TUESDAY) {
               $clientes = Cliente::where('martes','=',1)->orderBy('direccion','asc')->get();
               $dia = "Martes";
               return view('admin.reparto.index',compact('link','clientes','dia','fechaingresada'));
           } 

           if ($fecha->dayOfWeek == Carbon::WEDNESDAY) {
               $clientes = Cliente::where('miercoles','=',1)->orderBy('direccion','asc')->get();
               $dia = "Miercoles";
               return view('admin.reparto.index',compact('link','clientes','dia','fechaingresada'));
           } 

           if ($fecha->dayOfWeek == Carbon::THURSDAY) {
               $clientes = Cliente::where('jueves','=',1)->orderBy('direccion','asc')->get();
               $dia = "Jueves";
               return view('admin.reparto.index',compact('link','clientes','dia','fechaingresada'));
           } 

           if ($fecha->dayOfWeek == Carbon::FRIDAY) {
               $clientes = Cliente::where('viernes','=',1)->orderBy('direccion','asc')->get();
               $dia = "Viernes";
               return view('admin.reparto.index',compact('link','clientes','dia','fechaingresada'));
           } 

           if ($fecha->dayOfWeek == Carbon::SATURDAY) {
               $clientes = Cliente::where('sabado','=',1)->orderBy('direccion','asc')->get();
               $dia = "Sabado";
               return view('admin.reparto.index',compact('link','clientes','dia','fechaingresada'));
           } 
           if ($fecha->dayOfWeek == Carbon::SUNDAY) {
               $clientes = Cliente::where('domingo','=',1)->orderBy('direccion','asc')->get();
               $dia = "Domingo";
               return view('admin.reparto.index',compact('link','clientes','dia','fechaingresada'));
           }   


    }
   
}
