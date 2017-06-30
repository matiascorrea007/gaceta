@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-file-text font-red"></i>
<span class="caption-subject font-red sbold uppercase">Listado de Presupuestos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


<div class="box-body">
<ul class="nav nav-tabs">
  <li class="active"><a href="{{ url('listar-compra') }}">Compras</a></li>
</ul>
</div>


<!--buscador-->
{!!Form::open(['url'=>'listar-presupuesto', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
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

          <!--aqui van los borones-->
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <td>Mostrar</td>
    <th>Vendedor</th>
    <th>Cliente</th>
    <th>Pago</th>
    <th>Comentario</th>
    <th>Total</th>
    <th>Estatus</th>
    <th>Fecha</th>
    <th>Pdf</th>
      </tr>
    </thead>
    @foreach($presupuestos as $presupuesto)
    <tbody>

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#datalle-{{ $presupuesto->id }}"><i class="fa fa-expand"> Detalle</i></button>
</td>

      <td>{{ $presupuesto ->user->nombre}}</td>
      <td>{{ $presupuesto ->cliente->nombre}}</td>
      <td>{{ $presupuesto -> pago_tipo}}</td>
      
      <td>{{ $presupuesto -> total}}</td>

      <td>
      @if ($presupuesto -> status == "pagado")
      <a href="#status-{{ $presupuesto->id }}" data-toggle="modal" ><span class="label label-success">{{ $presupuesto -> status}}</span></a>

      @elseif ($presupuesto -> status == "pendiente")
      <a href="#status-{{ $presupuesto->id }}" data-toggle="modal" ><span class="label label-warning">{{ $presupuesto -> status}}</span></a>

      @elseif ($presupuesto -> status == "cancelado")
      <a href="#status-{{ $presupuesto->id }}" data-toggle="modal" ><span class="label label-danger">{{ $presupuesto -> status}}</span></a>

      @endif
      </td>

      <td>{{ $presupuesto -> created_at}}</td>

      <td><a href="{{ URL::to('presupuesto-detalle-pdf/1/'.$presupuesto->id) }}" target="_blank" ><button class="btn btn-danger"><i class="fa fa-file-pdf-o"> PDF</i></button></a></td>
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
 {!!$presupuestos->render() !!}



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
  });
</script>
@stop

@endsection
