@extends('layouts.shop')
@section('content')
@include('alerts.success')
@include('alerts.request')


<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">

	 <div class=" myaccount col-sm-12 col-md-12  ">
            
            <div class="user-info-block container">
                <ul class="navigation">
                    <li >
                         <a href="{{url('myaccount-perfil')}}" >
                          <span class=""><img height="50"  width="50" src="storage/iconos/perfil.svg"> PERFIL</span>
                         </a>
                    </li>
                    <li>
                        <a href="{{url('myaccount-config')}}" >
                          <span class=" "><img height="50"  width="50" src="storage/iconos/facturacion.svg"> Facturacion</span>
                         </a>
                    </li>
                   
                    <li>
                        <a href="{{ url('myaccount-facturas') }}" >
                          <span class=" "><img height="50"  width="50" src="storage/iconos/mis facturas.svg"> Mis Facturas</span>
                         </a>
                    </li>

                   <li>

                         <a href="{{ url('myaccount-ticket') }}" >
                          <span class=" "><img height="50"  width="50" src="storage/iconos/ticket.svg">Ticket</span>
                         </a>
                    </li>

                    <li class="active">
                         <a href="{{ url('myaccount-puntos') }}" >
                          <span class=" "><img height="50"  width="50"  src="storage/iconos/certificate.svg">Puntos</span>
                         </a>
                    </li>
                </ul>


 <div class="user-body">
    <div class="tab-content">


<!--=================== Datos de Usuario ======================-->
        <div id="information" class="tab-pane active">             
          <div class="panel panel-info block-center ">

            <div class="panel-heading">
              <h3 class="panel-title">Sistema de Puntos</h3>
            </div>

            <div class=" panel-body">
              <div class="row">

                <div class="col-md-12 col-lg-12 " align="center"> <img alt="User Pic" src="{{ url('storage/puntos/1.png ') }}" class="img-circle img-responsive"> 
                <a class="btn btn-default btn-lg"><img height="50"  width="50"  src="storage/iconos/certificate.svg"> CAMBIAR PUNTOS : {{$user->puntos}}</a>
                </div>
                
                  
                </div>
              </div>
              
            </div>
          </div>
</div>

<!--=================== Datos de Usuario ======================-->

                    </div>
                </div>


 
            </div>
        </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->

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
