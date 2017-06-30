@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


<!--buscador-->
{!!Form::open(['url'=>'usuario', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
  {!!Form::label('')!!}
  {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre y apellido'])!!}
  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
  {{ Form::select('type',config('options.type'),'',['class'=>'form-control']) }}
 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

<!--aqui van los botones-->
      
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
		<th>Agregar</th>
	</thead>
	@foreach($users as $user)
	<tbody>
	<!-- -->
 	<td>{{ $user -> nombre}}</td>
	<td>{{ $user -> email}}</td>
	<td>{{ $user -> telefono}}</td>
	<td>{{ $user -> direccion}}</td>
	<td>{{ $user -> cuit}}</td>

<td>
<a href="{{ URL::to('reparacion-agregar-usuario/'.$user->id) }}">{{ Form::submit('Agregar Usuario',array('class'=>'btn btn-success')) }}</a>
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




<!--para renderizar la paginacion-->
  {!! $users->render() !!}
                          

@endsection
