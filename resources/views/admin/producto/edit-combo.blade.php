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
<span class="caption-subject font-red sbold uppercase">Editar  Combo</span>
@include('alerts.request')
@include('alerts.success')

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




{!!Form::model($producto,['url'=>['producto-combo-update',$producto->id],'method'=>'PUT' , 'files'=>True])!!}

  <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Imagen de Portada</h3>
    </div>  
  <div class="panel-body">
<div class="row">
<!--imagen-->
<img src="{{$producto->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >

</div>
</div>
</div>


@include('admin.producto.forms.formscreate-pc-edit')


{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
<a class="btn btn-primary pull-left" href="{!! URL::to('producto-combo') !!}">
  <i class="fa fa-backward fa-lg"></i> Back</a>
{!!Form::close()!!}





                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
