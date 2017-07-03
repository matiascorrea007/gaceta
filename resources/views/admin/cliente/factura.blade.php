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
{!!Form::open(['url'=>'listar-venta', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">


<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Inicial')!!}
{!!Form::text('fecha_inicio',null,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Fecha de Inicio'])!!}

<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Final')!!}
{!!Form::text('fecha_final',null,['class'=>'form-control','id'=>'datepicker2','placeholder'=>'Fecha de Fin'])!!}

 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->

     </div><!--end caption-->




    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-factura">Generar Facturas<i class="fa fa-plus fa-lg"></i></button>
  		
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
	<thead>
		
		<th>#</th>
		<th>Desde</th>
		<th>hasta</th>
		<th>Total</th>
		<th>Estado</th>
		

		<th class="col-md-4">Operaciones</th>
	</thead>
	@foreach($facturas as $factura)
	 
	<tbody>
	<!-- -->
	<td>{{ $factura -> id}}</td>
	<td>{{ $factura -> desde}}</td>
	<td>{{ $factura -> hasta}}</td>
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

<a href="{!! URL::to('cliente-ver/'.$factura->id) !!}" target="_blank"><button class="btn btn-danger"><i class="fa fa-file-pdf-o"> PDF</i></button></a>


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



 <!--modal crear pago-->
 @include('admin.cliente.modal.modal-crear-factura')
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