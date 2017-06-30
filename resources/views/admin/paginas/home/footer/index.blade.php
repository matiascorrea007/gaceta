@extends('layouts.metronic')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-hand-o-down font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion Footer Informacion</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      
           @if(empty(DB::table('web_mercadopagos')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-informacion" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">

 @foreach($informacions as $informacion)
{!!Form::model($informacion,['url'=>['footer-informacion-update',$informacion->id],'method'=>'PUT' , 'files'=>True])!!}

<div class="modal-body">      
@include('admin.paginas.home.informacion.forms.formscreate')
</div>
<div class="modal-footer">
{!!Form::submit('Guardar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
@endforeach
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>














<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion Box Facebook</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      
           @if(empty(DB::table('web_mercadopagos')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-facebook" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>link</th>

    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($boxs as $box)
    <tbody>
  <td>{{ $box -> id}}</td>
  <td>{{ $box -> box}}</td>


  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $box->id }}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $box->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
@endif
</td>

  </tbody>
  @endforeach
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

<!--modal editar user-->
 @include('admin.paginas.home.facebook.modal.modal-edit-boxfacebook')
<!--modal eliminar usuario-->
 @include('admin.paginas.home.facebook.modal.modal-delete-boxfacebook')
<!--modal crear usuario-->
 @include('admin.paginas.home.facebook.modal.modal-crear-boxfacebook')






















 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion de Mercadopago</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
      
           @if(empty(DB::table('web_mercadopagos')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-mercadopago" >
              <i class="fa  fa-plus fa-lg"></i> Nuevo Porcentaje</a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Porcentaje</th>

    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($mercadopagos as $mercadopago)
    <tbody>
  <td>{{ $mercadopago -> id}}</td>
  <td>{{ $mercadopago -> porcentaje}}</td>


  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $mercadopago->id }}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $mercadopago->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
@endif
</td>

  </tbody>
  @endforeach
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

<!--modal editar user-->
 @include('admin.paginas.home.mercadopago.modal.modal-edit-mercadopago')
<!--modal eliminar usuario-->
 @include('admin.paginas.home.mercadopago.modal.modal-delete-mercadopago')
<!--modal crear usuario-->
 @include('admin.paginas.home.mercadopago.modal.modal-crear-mercadopago')

                          

@endsection
