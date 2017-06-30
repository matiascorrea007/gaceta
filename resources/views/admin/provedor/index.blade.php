@extends('layouts.metronic')
@section('content')


<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-user-secret font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Provedores</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
      
    </div>

<!--buscador-->
{!!Form::open(['url'=>'provedor', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
	{!!Form::label('')!!}
	{!!Form::text('razonsocial',null,['class'=>'form-control','placeholder'=>'nombre de provedor'])!!}
 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->

 </div><!--end caption-->



     <div class="actions">
       <div class="btn-group btn-group-devided" >

  		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-provedor"><i class="fa fa-plus fa-lg"></i></button>

       </div>
   </div>


  </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">

<table id="example2" class="table table-hover table-light">
	<thead>
		<th>Razon Social</th>
		<th>Contacto</th>
		<th>Email</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Cuit</th>
		<th class="col-md-4">Operaciones</th>
	</thead>
	@foreach($provedores as $provedore)
	<tbody>
	<!-- -->
	 <td>{{ $provedore -> razonsocial}}</td>
	 <td>{{ $provedore -> contacto}}</td>
	 <td>{{ $provedore -> email}}</td>
	 <td>{{ $provedore -> telefono}}</td>
	 <td>{{ $provedore -> direccion}}</td>
	 <td>{{ $provedore -> cuit}}</td>

<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ver-{{ $provedore->id }}"><i class="fa fa-expand"> Ver</i></button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $provedore->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $provedore->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
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


<!--modal crear provedor-->
 @include('admin.provedor.modal.modal-crear-provedor')
<!--modal editar provedor-->
 @include('admin.provedor.modal.modal-edit-provedor')
<!--modal eliminar provedor-->
 @include('admin.provedor.modal.modal-delete-provedor')
 <!--modal Ver provedor-->
 @include('admin.provedor.modal.modal-ver-provedor')
<!--para renderizar la paginacion-->
 {!! $provedores->render() !!}
                          

@endsection