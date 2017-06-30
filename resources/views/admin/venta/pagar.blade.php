@extends('layouts.metronic')
@include('alerts.errors')
@section('content')



<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-bank font-red"></i>
<span class="caption-subject font-red sbold uppercase">Realizar el Pago</span>
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


<div class="row">
        

<div class="col-md-3"> </div>
<div class="col-md-6  col-xs-12 col-sm-12">
<iframe src="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" width="800" height="800" frameborder="0"></iframe>
<script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>
</div>

<div class="col-md-3"> </div>

    </div>




                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>






@endsection
