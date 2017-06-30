<?php

namespace Soft\Http\Controllers;
use Illuminate\Http\Request;
use Soft\Http\Requests;
use Soft\Http\Controllers\Controller;
use Soft\User;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $link= "reportes";
        return view("pdf.listado_reportes",compact('link'));
    }



    public function crear_reporte_porpais($tipo){

     $vistaurl="pdf.reporte_por_pais";
     $user=User::all();
     
     return $this->crearPDF($user, $vistaurl,$tipo);

    }



      public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }



}

