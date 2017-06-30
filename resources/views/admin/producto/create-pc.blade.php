@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cubes font-red"></i>
<span class="caption-subject font-red sbold uppercase">Crear Nuevo Combo</span>
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
    <div><br>
    </div>


          </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
       <!--aqui van los botones-->
       </div>
   </div>


        </div><!--portlet-title-->

  <div class="portlet-body">


{!!Form::open(['url'=>'producto-combo-create', 'id'=>'form', 'method'=>'POST' , 'files'=>True ])!!}
@include('admin.producto.forms.formscreate-pc')
{!!Form::submit('registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}


                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
