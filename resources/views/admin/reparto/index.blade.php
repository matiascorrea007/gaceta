@extends('layouts.metronic')
@section('content')
@include('flash::message')


@section('links')
<ul class="page-breadcrumb">
     <li>
         <i class="icon-home"></i>
         <a href="{{ url('reparto') }}" >Reparto</a>
         <i class="fa fa-angle-right"></i>
     </li>
 </ul>
@endsection





<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-bicycle font-red" aria-hidden="true"></i>

<span class="caption-subject font-red sbold uppercase">Seccion de Repartos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>




<!--buscador-->
{!!Form::open(['url'=>'reparto-calcular', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
	<i class="fa fa-calendar"></i>
{!!Form::label('')!!}
{!!Form::text('fecha',null,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Ingrese la Fecha'])!!}

  {!!Form::select('reparto_id',$reparto,null,['class'=>'form-control'])!!}
  
 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> CALCULAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->

     </div><!--end caption-->




    <div class="actions">
       <div class="btn-group btn-group-devided" >
	
		@if(!empty($fechaingresada))
      <a class="btn btn-success" href="{!! URL::to('reparto-export-'.$fechaingresada) !!}">
      <i class="fa  fa-file-excel-o fa-lg"></i> exportar</a>
  		@endif
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
    <div class="col-md-2"></div>
    @if(!empty($dia))
    <div class="col-md-8"><h1>El reparto par el dias <strong style="color:red;">{{$dia}}</strong> es</h1></div>
    @endif
    <div class="col-md-2"></div>
        <div class="table-scrollable">

            <table id="example2" class="table table-hover table-light">
	<thead>
		<th>#</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<!--<th>Razon social</th>-->
		<th>Telefono</th>
		<th>Correo</th>
		<!--<th>Cuit</th>-->
		<th class="col-md-3">Direccion</th>
		<th>N* Depto</th>
		<th>Tipo de Pago</th>
		<th class="col-md-4">Operaciones</th>
	</thead>

  <?php 
  $i=0; ?>

	@if(!empty($clientes))
	@foreach($clientes as $cliente)
	<tbody>
	<!-- -->
  <td>{{$i = $i+1}}</td>
	<td>{{ $cliente -> nombre}}</td>
	<td>{{ $cliente -> apellido}}</td>
	<!--<td>{{ $cliente -> razonsocial}}</td>-->
	<td>{{ $cliente -> telefono}}</td>
	<td>{{ $cliente -> email}}</td>
	<!--	<td>{{ $cliente -> cuit}}</td>-->
	<td>{{ $cliente -> direccion}}</td>
	<td>{{ $cliente -> departamento}}</td>
	<td>{{ $cliente -> tipo}}</td>

	
</td>

	</tbody>
	@endforeach
	@endif
	</table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>




@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true  
    });
     $('#datepicker2').datepicker({
      autoclose: true
    });
     $('#desde').datepicker({
      autoclose: true  
    });
  });
</script>
@stop

                          

@endsection
