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
                    <li class="active">
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

                    <li>
                         <a href="{{ url('myaccount-puntos') }}" >
                          <span class=" "><img height="50"  width="50"  src="storage/iconos/certificate.svg">Puntos</span>
                         </a>
                    </li>
                </ul>

 <div class="user-body">
    <div class="tab-content">


<!--=================== Datos de Usuario ======================-->
        <div id="information" class="tab-pane active">             
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Account Information</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ url('storage/user/'.$user->path) }}" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre:</td>
                        <td>{{ $user->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Apellido:</td>
                        <td>{{ $user->apellido }}</td>
                      </tr>
                      <tr>
                        <td>Fecha de Ingreso</td>
                        <td>{{ $user->created_at }}</td>
                      </tr>
                   
                         <tr>
                             
                        <tr>
                        <td>Direccion</td>
                        <td>{{ $user->direccion }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                      </tr>

                      <tr>
                        <td>Provincia</td>
                        <td>{{ $user->provincia }}</td>
                      </tr>

                      <tr>
                        <td>Ciudad</td>
                        <td>{{ $user->ciudad }}</td>
                      </tr>

                      <tr>
                        <td>Codigo Postal</td>
                        <td>{{ $user->cp }}</td>
                      </tr>

                        <td>Telefono</td>
                        <td>{{ $user->telefono }}
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <button type="button" class="btn btn-azul" data-toggle="modal" data-target="#user"><i class="fa fa-edit"> Editar</i></button>
                    </div>
          </div>
</div>



<!--=================== Datos de Usuario ======================-->




                    </div>
                </div>
            </div>
        </div>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->



@include('shop.modal.user-edit') 


@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true  
    });
  });
</script>
@stop

@endsection
