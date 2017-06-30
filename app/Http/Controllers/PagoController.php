<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
use Soft\Http\Requests\GastoCreateRequest;
use Soft\Http\Requests\GastoUpdateRequest;

use Session;
use Redirect;
use Soft\Http\Requests;
use Soft\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

        $pagos= pago::paginate(10);
      
      /*buscador*/
        $fechai=$request->input('fecha_inicio');
        $fechaf=$request->input('fecha_final');

        if (!empty($fechai) and !empty($fechaf)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $pagos = pago::where('fecha', '>=' , $fechai)->where('fecha', '<=', $fechaf)->paginate(50);
        }
        /*buscador*/
        $link = "pagos";

       return view('admin.pagos.index',compact('link','pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GastoCreateRequest $request)
    {
         pago::create($request->all());
         Session::flash('message','Pago Guardado con exito'); 
       return Redirect::to('/pago-show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GastoUpdateRequest $request, $id)
    {
         $pagos=pago::find($id);
        $pagos->fill($request->all());
        $pagos->save();

        //le manda un mensaje al usuario
       Session::flash('message','pago modificado con exito'); 
       return Redirect::to('/pago-show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagos=gasto::find($id);
        $pagos->delete();
        
        //le manda un mensaje al usuario
        Session::flash('message','pago eliminado con exito'); 
        return Redirect::to('/pago-show');
    }
}
