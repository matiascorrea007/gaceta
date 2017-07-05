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
use Excel;


class ExcelController extends Controller
{
    
    public function userExport(){
     

       $export = user::select('users.*','perfils.descripcion' )
            ->join('perfils','users.perfil_id','=','perfils.id')
            ->get();
                
        Excel::create('user export',function($excel) use($export){
            $excel->sheet('usuarios',function($sheet) use($export){
                $sheet->fromArray($export);
            });
        })->export('xlsx');
         return redirect('/usuario');
    }

    public function userImport(){
       Excel::load(Input::file('user'),function($reader){
        $reader->each(function($sheet){
            user::firstOrCreate($sheet->toArray());
        });
       });
       return redirect('/usuario');
    }





    public function repartoExport(Request $request,$fecha){
     
      $fechaingresada = Carbon::parse($fecha);

       //pregunto que si la fecha ingresada es lunes entonces me devuelva el reparto del lunes                  
           if ($fechaingresada->dayOfWeek == Carbon::MONDAY) {
               $export = Cliente::where('lunes','=',1)->get();
           } 

           if ($fechaingresada->dayOfWeek == Carbon::TUESDAY) {
               $export = Cliente::where('martes','=',1)->get();
           } 

           if ($fechaingresada->dayOfWeek == Carbon::WEDNESDAY) {
               $export = Cliente::where('miercoles','=',1)->get();
           } 

           if ($fechaingresada->dayOfWeek == Carbon::THURSDAY) {
               $export = Cliente::where('jueves','=',1)->get();
           } 

           if ($fechaingresada->dayOfWeek == Carbon::FRIDAY) {
               $export = Cliente::where('viernes','=',1)->get();
           } 

           if ($fechaingresada->dayOfWeek == Carbon::SATURDAY) {
               $export = Cliente::where('sabado','=',1)->get();
           } 
           if ($fechaingresada->dayOfWeek == Carbon::SUNDAY) {
               $export = Cliente::where('domingo','=',1)->get();
           }   


                
        Excel::create('Clientes export',function($excel) use($export){
            $excel->sheet('clientes',function($sheet) use($export){
                $sheet->fromArray($export);
            });
        })->export('xlsx');
         return Redirect::back();
    }















}
