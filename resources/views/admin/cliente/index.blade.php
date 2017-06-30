@extends('layouts.metronic')
@section('content')


<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Clientes</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

<!--buscador-->
{!!Form::open(['url'=>'cliente', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
	{!!Form::label('')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre'])!!}
	{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->

     </div><!--end caption-->




    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-cliente"><i class="fa fa-plus fa-lg"></i></button>
  		
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
	<thead>
		
		<th>Nombre</th>
		<th>Correo</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Cuit</th>
		<th>Transpsporte</th>
		<th>Iva</th>
		<th class="col-md-4">Operaciones</th>
	</thead>
	@foreach($clientes as $cliente)
	<tbody>
	<!-- -->
	<td>{{ $cliente -> nombre}}</td>
	<td>{{ $cliente -> email}}</td>
	<td>{{ $cliente -> telefono}}</td>
	<td>{{ $cliente -> direccion}}</td>
	<td>{{ $cliente -> cuit}}</td>

	@if($cliente->transporte_id != null)
	<td>{{ $cliente ->transporte->descripcion}}</td>
	@else
	<td></td>
	@endif

	@if($cliente->iva_id != null)
	<td>{{ $cliente ->iva->descripcion}}</td>
	@else
	<td></td>
	@endif
	
<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ver-{{ $cliente->id }}"><i class="fa fa-expand"></i></button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $cliente->id }}"><i class="fa fa-edit"></i></button>



<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $cliente->id }}"><i class="fa fa-trash-o"></i></button>
@endif

@if($cliente->user_id == null)
<a href="{!! URL::to('cliente-crear-usuario/'.$cliente->id) !!}" class="btn btn-success"><i class="fa fa-user"> Crar Usuario</i></a>
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

<!--modal editar cliente-->
 @include('admin.cliente.modal.modal-edit-cliente')
<!--modal eliminar cliente-->
 @include('admin.cliente.modal.modal-delete-cliente')
 <!--modal ver cliente-->
 @include('admin.cliente.modal.modal-ver-cliente')
 <!--modal crear cliente-->
 @include('admin.cliente.modal.modal-crear-cliente')


<!--para renderizar la paginacion-->
  {!! $clientes->render() !!}

                          

@endsection
