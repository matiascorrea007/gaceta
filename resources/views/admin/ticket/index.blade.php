@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-ticket font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Tickets</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


<div class="box-body">
    <ul class="nav nav-tabs">
      <li class="active"><a href="{{ url('tickets') }}">Tickets Activos ({{$count}})</a></li>
      <li><a href="{{ url('tickets-completados') }}">Tickets Completados</a></li>
    </ul>
</div>


<!--buscador-->
{!!Form::open(['url'=>'producto', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
{!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo'])!!}
{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion'])!!}
 <button type="submit" class="fa  fa-search btn btn-success"> BUSCAR </button>
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
    <th>#</th>
    <th>Subject</th>
    <th>Contenido</th>
    <th>Status</th>
    <th>Última actualización</th>
    <!-- <th>Agent</th> -->
    <th>Priority</th>
    <th>Category</th>
    <th>Propietario</th>
   
    
    <th class="col-md-4">Operaciones</th>
  </thead>
  @foreach($tickets as $ticket)
  <tbody>
  <!-- -->
  <td>{{ $ticket -> id}}</td>
  <td>{{ $ticket -> subject}}</td>
  <td>{{ $ticket -> content}}</td>

  <td>
      @if ($ticket -> status -> nombre == "PENDIENTE")
      <a href="#status-{{ $ticket->id }}" data-toggle="modal" ><span class="label label-warning">{{ $ticket -> status -> nombre}}</span></a>
      @elseif ($ticket -> status -> nombre == "SOLUCIONADO")
      <a href="#status-{{ $ticket->id }}" data-toggle="modal" ><span class="label label-success">{{ $ticket -> status -> nombre }}</span></a>
      @endif
  </td>

  <td>{{ $ticket -> updated_at}}</td>

  <td>
      @if ($ticket -> priority -> nombre == "MEDIA")
      <a href="" data-toggle="modal" ><span class="label label-success">{{ $ticket -> $ticket -> priority -> nombre}}</span></a>
      @elseif ($ticket -> priority -> nombre == "BAJA")
      <a href="" data-toggle="modal" ><span class="label label-warning">{{ $ticket -> priority -> nombre }}</span></a>
      @elseif ($ticket -> priority -> nombre == "ALTA")
      <a href="" data-toggle="modal" ><span class="label label-danger">{{ $ticket -> priority -> nombre}}</span></a>
      @endif
  </td>

  <td>{{ $ticket -> category -> nombre}}</td>
  
  @if(!empty($ticket->agent_id))
  <td>{{ $ticket -> agent -> nombre}}</td>
  @else
  <td>Nadie</td>
  @endif


  

<td>

<a class="btn btn-success btn-lg fa fa-edit" href="{!! URL::to('ticket-responder/'.$ticket->id) !!}"></a>

<a class="btn btn-info btn-lg fa fa-envelope" href="{!! URL::to('tickets-responder/'.$ticket->id) !!}"></a>


</td>
@endforeach
  </tbody>
  
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

<!--modal de eliminar producto-->
@include('admin.ticket.modal.modal-status')


<!--para renderizar la paginacion-->
  {!! $tickets->render() !!}

@endsection
