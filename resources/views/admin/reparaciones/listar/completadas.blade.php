@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cogs font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Reparaciones</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


<div class="box-body">
<ul class="nav nav-tabs">
  <li ><a href="{{ url('reparaciones') }}">Reparaciones Pendientes ({{$count}})</a></li>
  <li class="active"> <a href="{{ url('reparaciones-completados') }}">Reparaciones Completados</a></li>
   <li ><a href="{{ url('reparaciones-canceladas') }}">Reparaciones Canceladas</a></li>
</ul>
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

         <a class="btn btn-success" href="{!! URL::to('reparacion-create') !!}">
              <i class="fa fa-plus fa-lg"></i></a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
  <thead>
    <th>#</th>
    <th>Equipo</th>
    <th>N Serie</th>
    <th>Falla</th>
    <th>Usuario</th>
    <th>Estado</th>

    <th class="col-md-4">Operaciones</th>
  </thead>
  @foreach($reparaciones as $reparacione)
  <tbody>
  <!-- -->
  <td>{{ $reparacione -> id}}</td>
  <td>{{ $reparacione -> equipo}}</td>
  <td>{{ $reparacione -> serie}}</td>
  <td>{!! $reparacione -> falla!!}</td>
  <td>{{ $reparacione ->user->apellido}} {{$reparacione ->user->nombre}}</td>

  <td>
      <a href="#status-{{ $reparacione->id }}" data-toggle="modal" ><span class="label label-warning">{{ $reparacione -> status}}</span></a>
  </td>

  

<td>

<a class="btn btn-danger btn-lg fa fa-file-pdf-o" href="{!! URL::to('reparacion-pdf/1/'.$reparacione->id) !!}">PDF</a>

<a  class="btn btn-primary btn-lg fa fa-edit" data-toggle="modal" data-target="#Edit-{{ $reparacione->id }}"></a>


@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <a class="btn  btn-danger btn-lg  fa fa-trash-o" data-toggle="modal" data-target="#confirmDelete-{{ $reparacione->id }}"></a>
@endif

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


<!--modal editar -->
 @include('admin.reparaciones.modal.modal-edit')
<!--modal eliminar -->
 @include('admin.reparaciones.modal.modal-delete')
 <!--modal STATUS-->
 @include('admin.reparaciones.modal.modal-status')

<!--para renderizar la paginacion-->
  {!! $reparaciones->render() !!}
                          

@endsection
