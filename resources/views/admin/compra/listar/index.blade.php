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
<span class="caption-subject font-red sbold uppercase">Listado de Compras</span>
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
{!!Form::open(['url'=>'listar-compra', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
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

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-usuario"><i class="fa fa-plus fa-lg"> </i></button>
               
      <a class="btn btn-success" data-toggle="modal" data-target="#importuser" >
      <i class="fa  fa-download fa-lg"></i> Importar</a>

      <a class="btn btn-success" href="{!! URL::to('/userExport') !!}">
      <i class="fa  fa-file-excel-o fa-lg"></i> exportar</a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <td>Mostrar</td>
    <th>Comprador</th>
    <th>Provedor</th>
    <th>Pago</th>
    <th>Comentario</th>
    <th>Total</th>
    <th>Estatus</th>
    <th>Entrega</th>
    <th>Fecha</th>
    <th>Pdf</th>
      </tr>
    </thead>
    @foreach($compras as $compra)
    <tbody>

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#datalle-{{ $compra->id }}"><i class="fa fa-expand"> Detalle</i></button>
</td>

      <td>{{ $compra->user->nombre }}</td>
      <td>{{ $compra->provedore->razonsocial}}</td>
      <td>{{ $compra->pago_tipo}}</td>
      <td>{!! $compra->comentario !!}</td>
      <td>{{ $compra->total}}</td>

      <td>
      @if ($compra -> status == "pagado")
      <a href="#status-{{ $compra->id }}" data-toggle="modal" ><span class="label label-success">{{ $compra -> status}}</span></a>

      @elseif ($compra -> status == "pendiente")
      <a href="#status-{{ $compra->id }}" data-toggle="modal" ><span class="label label-warning">{{ $compra -> status}}</span></a>

      @elseif ($compra -> status == "cancelado")
      <a href="#status-{{ $compra->id }}" data-toggle="modal" ><span class="label label-danger">{{ $compra -> status}}</span></a>

      @endif
      </td>


      <td>
      @if ($compra -> entregado == "Entregado") 
      <a href="#entrega-{{ $compra->id }}" data-toggle="modal" ><span class="label label-success">{{ $compra -> entregado}}</span></a>

      @elseif ($compra -> entregado == "No Entregado")
      <a href="#entrega-{{ $compra->id }}" data-toggle="modal" ><span class="label label-warning">{{ $compra -> entregado}}</span></a>

       @elseif ($compra -> entregado == "Cancelado")
       <a href="#entrega-{{ $compra->id }}" data-toggle="modal" ><span class="label label-danger">{{ $compra -> entregado}}</span></a>
       @endif
      </td>



      <td>{{ $compra -> created_at}}</td>

      <td><a href="{{ URL::to('compra-detalle-pdf/1/'.$compra->id) }}" target="_blank" ><button class="btn btn-danger"><i class="fa fa-file-pdf-o"> PDF</i></button></a></td>
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
 {!!$compras->render() !!}


    @include('admin.compra.modal.modal-detalle-compra')
    @include('admin.compra.modal.modal-status')
     @include('admin.compra.modal.modal-entregas')


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
