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
  <li ><a href="{{ url('todas-las-facturas') }}">Todas las Facturas </a></li>
  <li class="active"><a href="{{ url('facturas-pagadas') }}">Facturas Pagadas ({{$count}})</a></li>
  <li><a href="{{ url('facturas-pendientes') }}">Facturas Pendientes</a></li>
</ul>
</div>





     </div><!--end caption-->




    <div class="actions">
       <div class="btn-group btn-group-devided" >
          
          {!!Form::open(['url'=>'factura-detalleseleccion-pdf/1', 'method'=>'POST' , 'class'=>'' , 'role'=>'Search'])!!}

           <button type="submit" class="btn btn-danger" >Imprimir Seleccion<i class="fa fa fa-file-pdf-o"></i></button>

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#facturas-masivas"><i class="fa fa-file-pdf-o fa-lg"></i> Generar Facturas Masivas</button>
  		
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
	<thead>
		
		<th>#</th>
    <th>select</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>direccion</th>
    <th>N* depto</th>
		<th class="col-md-3">Desde</th>
		<th class="col-md-3">hasta</th>
    <th>Cantidad a entregar</th>
		<th>Total</th>
		<th>Estado</th>
		

		<th class="col-md-4">Operaciones</th>
	</thead>
	@foreach($facturas as $factura)
	 
	<tbody>
	<!-- -->
	<td>{{ $factura -> id}}</td>

  <td>
  <div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox">
        <input type="checkbox" value="{{$factura->id}}" id="checkbox1"  name="check{{$factura->id}}">
          <span></span>
        </label>
    </div>
</div>
</td>

  <td>{{$factura ->cliente-> nombre}}</td>
  <td>{{ $factura ->cliente-> apellido}}</td>
  <td>{{ $factura ->cliente-> direccion}}</td>
  <td>{{ $factura ->cliente-> departamento}}</td>
  <td>{{$factura->desde->format('d-m-y')}}</td>
  <td>{{$factura->hasta->format('d-m-y')}} </td>
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
                {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>




  <!--modal eliminar factura-->
@include('admin.cliente.modal.modal-delete-factura')
 <!--modal status factura-->
@include('admin.cliente.modal.modal-status')
 <!--modal facturas masivas-->
@include('admin.facturas.modal.facturas-masivas')
                          



<!--para renderizar la paginacion-->
  {!! $facturas->render() !!}

  
@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('#desde2').datepicker({
      autoclose: true  
    });
     $('#hasta').datepicker({
      autoclose: true
    });
     $('#desde').datepicker({
      autoclose: true  
    });
     $('#datepicker1').datepicker({
      autoclose: true  
    });
     $('#datepicker2').datepicker({
      autoclose: true  
    });
     $('#datepicker3').datepicker({
      autoclose: true  
    });
     $('#datepicker4').datepicker({
      autoclose: true  
    });
  });
</script>


<script type="text/javascript">
  function marcar(source) 
  {
    checkboxes=document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
    for(i=0;i<checkboxes.length;i++) //recoremos todos los controles
    {
      if(checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
      {
        checkboxes[i].checked=source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
      }
    }
  }
</script>
@stop
@endsection
