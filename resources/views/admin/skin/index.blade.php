@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-paint-brush font-red"></i>
<span class="caption-subject font-red sbold uppercase">Estilo del Panel</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

    <div class="actions">
       <div class="btn-group btn-group-devided" >

       <!--aqui van los botones-->
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">


{{ Form::open(['url' => ['skin-store'], 'method' => 'POST', 'files'=>True]) }}

<div class="modal-body">      

@include('admin.skin.forms.formscreate')
</div>

<div class="modal-footer">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}

{!!Form::close()!!}




                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection
