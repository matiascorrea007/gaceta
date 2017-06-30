<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
use Soft\Http\Requests;
use Soft\Http\Requests\UserCreateRequest;
use Soft\Http\Requests\UserUpdateRequest;
use Illuminate\Database\Eloquent\Scope;
//agregamos esto para no escribir cinema 
use Soft\User;
use Soft\Perfil;
use Session;
use Redirect;
use Storage;
use Image;
use Auth;
use Alert;
use Soft\Cliente;
use DB;

class UsuarioController extends Controller
{

    public function __construct()
    {
        //se aplica el auth a todos los metodos de esta clase , por lo tanto tiene que estar
        //logueado para acceder
        //$this->middleware('auth');
        //$this->middleware('admin');
        
    }

    //lista los recuroso
    public function index(Request $request)
    {
        
        //modal
        $perfils  = Perfil::lists('descripcion', 'id');

        //ordenamos por usu_nombre y lo guaramos en $users
        $users=user::orderBy('id');
        //lo que ingresamos en el buscador lo alamacenamos en $usu_nombre
        $nombre=$request->input('nombre');
        //preguntamos que si ($usu_nombre no es vacio
        if (!empty($nombre)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $users->where(DB::raw("CONCAT(nombre,'',apellido)"),'LIKE','%'.$nombre.'%');
            
        }

        //busqueda por email
        $email=$request->input('email');
        if (!empty($email)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $users->where('email','LIKE','%'.$email.'%');
        }


        //busqueda por tipo
        $tpye=$request->input('type');
        if (!empty($tpye)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $users->where('perfil_id','LIKE','%'.$tpye.'%');
        }


        //realizamos la paginacion
        $users=$users->paginate(10);
        $link = "usuarios";

        return view('admin.usuario.index',compact('link','users','perfils'));
        

    }


    public function create()
    {
        $perfils=Perfil::lists('descripcion','id');
        //retorna a una vista que esta en la carpeta usuario y dentro esta create
        return view('admin.usuario.create',['perfils'=>$perfils]);
    }

   
   //guarda los recursos en este caso los datos del usuario en la tabla user , name , email y password son los campos de mi
    //tabla user , a eso les agrego los datos de nombre , correo y pass atravas de request por el metodo post
    public function store(UserCreateRequest $request)
    {      


        //validacion para el email
        $email = User::where('email','=',$request['email'])->first();

        if($email == null){
         $user =   User::create([
            'nombre' =>$request['nombre'],
            'apellido' =>$request['apellido'],
            'password'=>bcrypt($request['password']),
            're_password'=>$request['re_password'],
            'email' =>$request['email'],
            'direccion' =>$request['direccion'],
            'perfil_id' =>$request['perfil_id'],
            'telefono' =>$request['telefono'],
            'provincia' =>$request['provincia'],
            'ciudad' =>$request['ciudad'],
            'cp' =>$request['cp'],
            ]);

            Cliente::create([
            'nombre' =>$user->nombre,
            'apellido' =>$user->apellido,
            'user_id'=>$user->id,
            'direccion'=>$user->direccion,
            'email' =>$user->email,
            'telefono' =>$user->telefono,
            'provincia' =>$user->provincia,
            'ciudad' =>$user->ciudad,
            'cp' =>$user->cp,

            ]);

        Alert::success('Mensaje existoso', 'Creado');
        return redirect('/usuario');

        }else{

            Alert::error('Mensaje Error', 'el E-MAIL ya se encuntra en uso');
        return redirect('/usuario');

        }


    }

    

    public function show($id)
    {
        //
    }

    //editar los recursos
    public function edit($id)
    {
       //creamos un $movie que va a hacer igual al user que encontremos con la id que recibimos 
        $perfils=Perfil::lists('descripcion','id');
        //creamos un $user que va a hacer igual al user que encontremos con la id que recibimos 
        
        //nos regrasa a la vista en edit que se encuentra en la carpeta usuario a la cual le pasamos el 
        //user correspondiente
        
        return view('admin.usuario.edit',['user'=>$user , 'perfils'=>$perfils]);
    }


    public function update(UserUpdateRequest $request, $id)
    {
        //creamos un $user que va a hacer igual al user que encontremos con la id que recibimos 
        $user=User::find($id);
        $user->nombre = $request['nombre'];
        $user->apellido =$request['apellido'];
        if(!empty($request['password'])){
        $user->password=bcrypt($request['password']);
        }
        $user->re_password=$request['re_password'];
        $user->email =$request['email'];
        $user->direccion =$request['direccion'];
        $user->perfil_id =$request['perfil_id'];
        $user->telefono =$request['telefono'];
        $user->telefono =$request['provincia'];
        $user->telefono =$request['ciudad'];
        $user->telefono =$request['cp'];
       // $user->path =$request['path'];
        $user->save();

        //carga de imagen atraves de intervention el paquete de imagen
        if ($request->hasFile('path')) {
            $avatar =$request->file('path');
            $filename=time() . '.' . $avatar->getClientOriginalExtension();
            image::make($avatar)->resize(300, 300)->save( public_path('/storage/user/' . $filename));

            $user=User::find($id);
            $user->path = $filename;
            $user->save();
        }
        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Modificado');
       return Redirect::to('/usuario');

    }


    public function destroy($id)
    {
        //destruye deacuerdo al id que nos pasaron User::destroy($id); 
        //medoto delete ad , buscamos al user deacuardo a la id que recibimos y hacemos referencia a delete
        $user=User::find($id);
        $user->delete();
        \Storage::delete($user->path);
        //le manda un mensaje al usuario
        Alert::success('Mensaje existoso', 'Eliminado');
        return Redirect::to('/usuario');
    }


    public function perfil()
    { 
        
        return view('admin.usuario.perfil');
    }

}
