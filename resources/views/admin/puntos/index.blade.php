@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->

<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-diamond font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion De Puntos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

            <div>
            @if(empty(DB::table('puntos')->get()))
            <a class="btn btn-success" data-toggle="modal" data-target="#nuevo-porcentaje" >
            <i class="fa  fa-plus fa-lg"></i> Nuevo Porcentaje</a>
            @endif
            </div>

       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Porcentaje (%)</th>
    <th>Descripcion</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($puntos as $punto)
    <tbody>
  <td>{{ $punto -> id}}</td>
  <td>{{ $punto -> porcentaje}}</td>
  <td>El Usuario gana el porcentaje del total de la venta</td>
  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $punto->id }}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $punto->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
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
 @include('admin.puntos.modal.modal-edit-puntos')
<!--modal eliminar usuario-->
 @include('admin.puntos.modal.modal-delete-puntos')
<!--modal agregar usuario-->
 @include('admin.puntos.modal.modal-agregar-porcentaje')





 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Agregar Puntos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
       <a class="btn btn-success" href="{!! URL::to('puntos-seleccionar-usuario') !!}">
        <i class="fa fa-plus fa-lg"></i> </a>
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
   @if(count($user))
  <thead>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Telefono</th>
    <th>Direccion</th>
    <th>Puntos</th>
    <th>Agregar</th>
  </thead>
  
  <tbody>
  <!-- -->
  <td>{{ $user -> nombre}}</td>
  <td>{{ $user -> email}}</td>
  <td>{{ $user -> telefono}}</td>
  <td>{{ $user -> direccion}}</td>
  <td>{{ $user -> puntos}}</td>


  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Agregar-{{ $user->id }}"><i class="fa fa-edit"> Agregar</i></button>
</td>

  </tbody>
 @endif
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
<!--modal editar user-->
 @include('admin.puntos.modal.modal-agregar-puntos')
<!--modal eliminar usuario-->
 @include('admin.puntos.modal.modal-delete-puntos')

@endsection
