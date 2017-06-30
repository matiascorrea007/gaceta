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
<span class="caption-subject font-red sbold uppercase">Crear Nueva Reparacion</span>
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')

    <div><br>
    </div>

     </div><!--end caption-->
        </div><!--portlet-title-->
  
  <a class="center-block btn btn-success" href="{!! URL::to('reparacion-seleccionar-usuario') !!}">
  <i class="fa fa-user-plus fa-lg"></i> Selecionar Usuario</a>

{!!Form::open(['url'=>'reparacion-store', 'method'=>'POST'])!!}
@include('admin.reparaciones.forms.formscreate')
{!!Form::submit('registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}


            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

                          

@endsection
