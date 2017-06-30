@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-tasks font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion de Marcas</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

<!--buscador-->
{!!Form::open(['url'=>'marca', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
  {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'ingrese la descripcion'])!!}
</div>
{!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      <a class="btn btn-success" data-toggle="modal" data-target="#crear-marcas" >
      <i class="fa  fa-plus fa-lg"></i></a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
    <th>ID</th>
    <th>Descripcion</th>
    <th class="col-md-4">Operaciones</th>   
  </thead>
  @foreach($marcas as $marca)
  <tbody>
  <!-- -->
 <td>{{ $marca -> id}}</td>
 <td>{{ $marca -> descripcion}}</td>


<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ver-{{ $marca->id }}"><i class="fa fa-expand"> Ver</i></button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $marca->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--nivel de acceso-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $marca->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
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


<!--modal editar marca-->
 @include('admin.configuracion.marca.modal.modal-edit-marca') 
<!--modal eliminar marca-->
 @include('admin.configuracion.marca.modal.modal-delete-marca')
 <!--modal ver marca-->
 @include('admin.configuracion.marca.modal.modal-ver-marca')
  <!--modal crear marca-->
 @include('admin.configuracion.marca.modal.modal-crear-marca')
<!--para renderizar la paginacion-->
{!! $marcas->render() !!}
                          

@endsection
