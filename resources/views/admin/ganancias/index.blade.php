@extends('layouts.metronic')
@section('content')
@include('flash::message')


@section('links')
<ul class="page-breadcrumb">
     <li>
         <i class="icon-home"></i>
         <a href="{{ url('reparto') }}" >Ganancias</a>
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

<span class="caption-subject font-red sbold uppercase">Seccion de Ganancias</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>




<!--buscador-->
{!!Form::open(['url'=>'ganancias-calcular', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
  <i class="fa fa-calendar"></i>
{!!Form::label('Desde')!!}
{!!Form::text('fecha_desde',null,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Ingrese la Fecha'])!!}
{!!Form::label('Hasta')!!}
{!!Form::text('fecha_hasta',null,['class'=>'form-control','id'=>'datepicker2','placeholder'=>'Ingrese la Fecha'])!!}
  
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
    @if(!empty($facturas))
    <div class="col-md-8"><h1>La Ganancia del periodo es <strong style="color:red;">${{$total}}</strong></h1></div>
    @endif
    <div class="col-md-2"></div>
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
  </thead>
  @if(!empty($facturas))
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
