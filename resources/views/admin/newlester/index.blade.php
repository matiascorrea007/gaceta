@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-envelope font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Newsletter</span>
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
        


{!!Form::open(['url'=>'newsletter-enviar', 'method'=>'POST'])!!}
@include('admin.newlester.forms.formscreate')

{!!Form::submit('Enviar',['class'=>'btn btn-primary pull-right'])!!}
<br><br><br>
{!!Form::close()!!}



                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



 

@endsection
