@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-truck font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configurar Transporte</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

<!--buscador-->
{!!Form::open(['url'=>'transporte', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
	{!!Form::label('nombre')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'nombre del transporte'])!!}
 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
      
      <a class="btn btn-success" data-toggle="modal" data-target="#crear-transporte" >
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
		<th>Direccion</th>
		<th>Telefono</th>
		<th class="col-md-4">Operaciones</th>	
	</thead>
	@foreach($transportes as $transporte)
	<tbody>
	<!-- -->
 <td>{{ $transporte -> id}}</td>
 <td>{{ $transporte -> descripcion}}</td>
 <td>{{ $transporte -> direccion}}</td>
 <td>{{ $transporte -> telefono}}</td>

<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ver-{{ $transporte->id }}"><i class="fa fa-expand"> Ver</i></button>

<button type="button" class="btn btn-primary" onclick="ModalEditarTransporte({{$transporte->id}});" data-toggle="modal" data-target="#Edit"><i class="fa fa-edit"> Editar</i></button>

<!--nivel de acceso-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $transporte->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
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

<!--modal editar transporte-->
 @include('admin.configuracion.transporte.modal.modal-edit-transporte')
<!--modal eliminar rubro-->
 @include('admin.configuracion.transporte.modal.modal-delete-transporte')
 <!--modal eliminar rubro-->
 @include('admin.configuracion.transporte.modal.modal-ver-transporte')
  <!--modal eliminar rubro-->
 @include('admin.configuracion.transporte.modal.modal-crear-transporte')

<!--para renderizar la paginacion-->
{!! $transportes->render() !!}
                          

@endsection
