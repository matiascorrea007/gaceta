<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use \Milon\Barcode\DNS1D;
use \Milon\Barcode\DNS2D;  
use Soft\Producto;
use Soft\Combo;
use Soft\Producto_imagen;
use Soft\Categoria;
use Soft\Categoriasub;
use Session;
use Redirect;
use Storage;
use Soft\Rubro;
use Soft\Marca;
use Soft\Ivatipo;
use Soft\Provedore;
use Soft\Review;
use Alert;
use Image;
use DB;
use Input;
use Illuminate\Support\Collection as Collection;

class CodigoBarrasControler extends Controller
{



    public function CodigoDeBarrasFiltrar(Request $request)
    {   
         $categorias = categoria::all();
         $productos = Producto::all();
         $link = "productos codigos";
         return view('admin.producto.barras.barras',compact('link','categorias','productos'));
    }


    public function GenerarCodigoDeBarras(Request $request)
    { 
       
        $productoss = DB::table('productos')->where('categoria_id','=',$request['categoria_id'])->where('categoriasub_id','=',$request['categoriasub_id'])->get();
        $productoss2 = DB::table('productos')->where('id','>=',$request['producto_desde'])->where('id','<=',$request['producto_hasta'])->get();
        
        $productosFiltro1 = Collection::make($productoss);
        $productosFiltro2 = Collection::make($productoss2);
        $tipo = 1;
        $vistaurl="admin.producto.barras.generar-barras-pdf";
       
        return $this->crearCodigoPDF($productosFiltro1,$productosFiltro2,$vistaurl,$tipo);

    }


    public function crearCodigoPDF($productosFiltro1,$productosFiltro2,$vistaurl,$tipo){
    
        $data = $productosFiltro1;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date','productosFiltro1','productosFiltro2'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
     
    }
   
}
