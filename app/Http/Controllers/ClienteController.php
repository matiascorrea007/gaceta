<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests\ClienteCreateRequest;
use Soft\Http\Requests\ClienteUpdateRequest;


use Soft\Cliente;
use Soft\Precio;
use Session;
use Redirect;
use Soft\Http\Requests;
use Alert;
use Soft\User;
use Soft\Dia;
use DB;
use Flash;
use Storage;
use Image;
use Auth;
use Input;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        


        $clientes=cliente::orderBy('nombre');
        //lo que ingresamos en el buscador lo alamacenamos en $usu_nombre
        $nombre=$request->input('nombre');
        
        $clientes = DB::table('dias')
        ->join('clientes', 'dias.cliente_id', '=', 'clientes.id')->paginate(10);

        //preguntamos que si ($usu_nombre no es vacio
        if (!empty($nombre)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
           $clientes->where(DB::raw("CONCAT(nombre,'',apellido)"),'LIKE','%'.$nombre.'%');
        }   

        //busqueda por email
        $direccion=$request->input('direccion');
        if (!empty($direccion)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $clientes->where('direccion','LIKE','%'.$direccion.'%');
        }   

        //$clientes = $clientes->paginate(10);

        //dd($clientes);
        //realizamos la paginacion
         
      
        //dd($clientes);

        $link = "clientes";
        $count = cliente::where('tipo','=','semanal')->count();
        $precios = Precio::first();
      
       //$clientee = Cliente::find(8);
      // dd($clientee->created_at->addweeks(1));
        return view('admin.cliente.index',compact('link','clientes','count','precios'));
    }

    

    public function mensuales(Request $request)
    {


        $clientes=cliente::orderBy('nombre');
        //lo que ingresamos en el buscador lo alamacenamos en $usu_nombre
        $nombre=$request->input('nombre');
     
        //preguntamos que si ($usu_nombre no es vacio
        if (!empty($nombre)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
           $clientes->where(DB::raw("CONCAT(nombre,'',apellido)"),'LIKE','%'.$nombre.'%');
        }   

        //busqueda por email
        $email=$request->input('email');
        if (!empty($email)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $clientes->where('email','LIKE','%'.$email.'%');
        }

        //realizamos la paginacion
         $clientes = DB::table('dias')
        ->join('clientes', 'dias.cliente_id', '=', 'clientes.id')->paginate(10);


        $link = "clientes";
        $count = cliente::where('tipo','=','mensuales')->count();
        $precios = Precio::first();

       
        return view('admin.cliente.listar.mensuales',compact('link','clientes','count','precios'));
    }



    public function quincenales(Request $request)
    {

        $clientes=cliente::orderBy('nombre');
        //lo que ingresamos en el buscador lo alamacenamos en $usu_nombre
        $nombre=$request->input('nombre');
     
        //preguntamos que si ($usu_nombre no es vacio
        if (!empty($nombre)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
           $clientes->where(DB::raw("CONCAT(nombre,'',apellido)"),'LIKE','%'.$nombre.'%');
        }   

        //busqueda por email
        $email=$request->input('email');
        if (!empty($email)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $clientes->where('email','LIKE','%'.$email.'%');
        }

        //realizamos la paginacion
         $clientes = DB::table('dias')
        ->join('clientes', 'dias.cliente_id', '=', 'clientes.id')->paginate(10);


        $link = "clientes";
        $count = cliente::where('tipo','=','quincenales')->count();
        $precios = Precio::first();


        return view('admin.cliente.listar.quincenales',compact('link','clientes','count','precios'));
    }






  /*  public function create()
    {
        $ivas=iva::lists('descripcion','id');
        $transportes=transporte::lists('descripcion','id');

        return view('admin.cliente.create',['ivas'=>$ivas ,'transportes'=>$transportes ]);
    }*/




    public function ver(Request $request,$id)
    {   
        $link = "clientes";
       $cliente = Cliente::find($id);
        return view('admin.cliente.ver',compact('cliente','link'));
    }


    public function store(ClienteCreateRequest $request)
    {   

        $cliente = cliente::create($request->all());

        Alert::success('Mensaje existoso', 'Cliente Creado Correctamente');
         
        return Redirect::back();

        
    }


    public function show($id)
    {
        //
    }



    public function edit($id)
    {
      /*  $ivas=iva::lists('descripcion','id');
        $transportes=transporte::lists('transp_descrip','id');

        $cliente=cliente::find($id);
        return view('admin.cliente.edit',['cliente'=>$cliente  , 'transportes'=>$transportes , 'ivas'=>$ivas]);
    */}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente= Cliente::find($id);

        $cliente->nombre = $request['nombre'];
        $cliente->apellido = $request['apellido'];
        $cliente->razonsocial = $request['razonsocial'];
        $cliente->telefono = $request['telefono'];
        $cliente->email = $request['email'];
        $cliente->cuit = $request['cuit'];
        $cliente->direccion = $request['direccion'];
        $cliente->departamento = $request['departamento'];
        $cliente->tipo = $request['tipo'];
        $cliente->habilitado = $request['habilitado'];
        $cliente->lunes = $request['lunes'];
        $cliente->martes = $request['martes'];
        $cliente->miercoles = $request['miercoles'];
        $cliente->jueves = $request['jueves'];
        $cliente->viernes = $request['viernes'];
        $cliente->sabado = $request['sabado'];
        $cliente->domingo = $request['domingo'];
        $cliente->save();


        //le manda un mensaje al usuario
      Alert::success('Mensaje existoso', 'Cliente Modificado Exitosamente');
      return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=cliente::find($id);
        $cliente->delete();
        
        //le manda un mensaje al usuario
        Alert::success('Mensaje existoso', 'Cliente Eliminado'); 
        return Redirect::to('/cliente');
    }


public function CrearUsuario($id)
    {
        
   $cliente = Cliente::find($id);
   $email = User::where('email','=',$cliente->email)->first();
  

   if($email == null){
   $user= user::create([
            'nombre' =>$cliente->nombre,
            'apellido' =>$cliente->apellido,
            'password'=>bcrypt(1234),
            're_password'=>1234,
            'email' =>$cliente->email,
            'direccion' =>$cliente->direccion,
            'perfil_id' =>3,
            'telefono' =>$cliente->telefono,
            'provincia' =>"tucuman",
            'ciudad' =>"san miguel de tucuman",
            'cp' =>$cliente->cp,
            ]);

    $cliente->user_id = $user->id;
    $cliente->save();

     Alert::success('Mensaje existoso', 'Usuario Creado Con Exito'); 
        return Redirect::to('/cliente');
    }else{

        Alert::error('Error ', 'El E-MAIL ya se encuentra en uso'); 
        return Redirect::to('/cliente');
    }

    }





}
