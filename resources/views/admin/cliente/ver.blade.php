@extends('layouts.metronic')
@section('content')
@include('flash::message')

<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Clientes ({{$cliente->nombre}} {{$cliente->apellido}})</span>
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

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-pago">Generar Facturas<i class="fa fa-plus fa-lg"></i></button>
  		
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
	<thead>
		
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Razon social</th>
		<th>Telefono</th>
		<th>Correo</th>
		<th>Cuit</th>
		<th class="col-md-3">Direccion</th>
		<th>N* Depto</th>
		<th>Tipo de Pago</th>
		<th class="col-md-4">Operaciones</th>
	</thead>
	
	 @if($cliente->tipo == "semanal")
	<tbody>
	<!-- -->
	<td>{{ $cliente -> nombre}}</td>
	<td>{{ $cliente -> apellido}}</td>
	<td>{{ $cliente -> razonsocial}}</td>
	<td>{{ $cliente -> telefono}}</td>
	<td>{{ $cliente -> email}}</td>
	<td>{{ $cliente -> cuit}}</td>
	<td>{{ $cliente -> direccion}}</td>
	<td>{{ $cliente -> departamento}}</td>
	<td>{{ $cliente -> tipo}}</td>
	
	
<td>
<a href="{!! URL::to('cliente-ver/'.$cliente->id) !!}" class="btn btn-warning"><i class="fa fa-expand"></i></a>


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
	@endif
	
	</table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



 <!--modal crear pago-->
 @include('admin.cliente.modal.modal-crear-pago')

                          

@endsection
