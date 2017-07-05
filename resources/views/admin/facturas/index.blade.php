@extends('layouts.metronic')
@section('content')
@include('flash::message')



@section('links')
<ul class="page-breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="#" >Todas las Factuas</a>
        <i class="fa fa-angle-right"></i>
    </li>
</ul>
@endsection



<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-calculator font-red"></i>
<span class="caption-subject font-red sbold uppercase">Todas las Facturas</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

<div class="box-body">
<ul class="nav nav-tabs">
  <li class="active"><a href="{{ url('todas-las-facturas') }}">Todas las Facturas ({{$count}})</a></li>
  <li><a href="{{ url('facturas-pagadas') }}">Facturas Pagadas</a></li>
  <li><a href="{{ url('facturas-pendientes') }}">Facturas Pendientes</a></li>
</ul>
</div>





     </div><!--end caption-->



<!--
    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-factura">Generar Facturas<i class="fa fa-plus fa-lg"></i></button>
  		
       </div>
   </div>
-->

        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
	<thead>
		
		<th>#</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>direccion</th>
    <th>N* depto</th>
		<th>Desde</th>
		<th>hasta</th>
    <th>Cantidad a entregar</th>
		<th>Total</th>
		<th>Estado</th>
		

		<th class="col-md-4">Operaciones</th>
	</thead>
	@foreach($facturas as $factura)
	 
	<tbody>
	<!-- -->
	<td>{{ $factura -> id}}</td>
  <td>{{$factura ->cliente-> nombre}}</td>
  <td>{{ $factura ->cliente-> apellido}}</td>
  <td>{{ $factura ->cliente-> direccion}}</td>
  <td>{{ $factura ->cliente-> departamento}}</td>
	<td>{{ $factura -> desde}}</td>
	<td>{{ $factura -> hasta}}</td>
  <td>{{ $factura -> cantidad}}</td>
	<td>${{ $factura -> total}}</td>

	<td>
      @if ($factura -> status == "pagado")
      <a href="#status-{{ $factura->id }}" data-toggle="modal" ><span class="label label-success">{{ $factura -> status}}</span></a>

      @elseif ($factura -> status == "pendiente")
      <a href="#status-{{ $factura->id }}" data-toggle="modal" ><span class="label label-warning">{{ $factura -> status}}</span></a>

      @elseif ($factura -> status == "cancelado")
      <a href="#status-{{ $factura->id }}" data-toggle="modal" ><span class="label label-danger">{{ $factura -> status}}</span></a>

      @endif
      </td>
		
<td>

<a href="{!! URL::to('factura-detalle-pdf/1/'.$factura->id) !!}" target="_blank"><button class="btn btn-danger"><i class="fa fa-file-pdf-o"> PDF</i></button></a>



<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $factura->id }}"><i class="fa fa-trash-o"></i></button>
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




  <!--modal eliminar factura-->
@include('admin.cliente.modal.modal-delete-factura')
 <!--modal status factura-->
@include('admin.cliente.modal.modal-status')
                          




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
