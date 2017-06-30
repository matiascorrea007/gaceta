<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use View;
use Auth;
use Route;


class BaseController extends Controller
{
  
   public function __construct() {

       //datos de la plantilla principal
        $subcategorias = DB::table('categoriasubs')->orderBy('nombre', 'asc')->get();
        $categorias = DB::table('categorias')->orderBy('nombre', 'asc')->get();      
        $carrucelMarcas =  DB::table('web_marcas')->orderBy('imagen', 'asc')->get();
        $informacions =  DB::table('web_informacions')->orderBy('direccion1', 'asc')->get();
        $boxs =  DB::table('web_facebooks')->orderBy('box', 'asc')->get();
        $logos =  DB::table('web_logos')->orderBy('logo', 'asc')->get();
        $carrucels =  DB::table('web_carrucels')->orderBy('imagen', 'asc')->get();



       View::share ( 'subcategorias', $subcategorias );
       View::share ( 'categorias', $categorias );
       View::share ( 'carrucelMarcas', $carrucelMarcas );
       View::share ( 'informacions', $informacions );
       View::share ( 'boxs', $boxs );
       View::share ( 'logos', $logos );
       View::share ( 'carrucels', $carrucels );
       
     
      

    }  


}
