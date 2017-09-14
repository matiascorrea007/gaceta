@extends('layouts.metronic')
@section('content')
@include('flash::message')



@section('links')
<ul class="page-breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{ url('cliente-mensuales') }}" >Clientes</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
    <a href="{{ url('cliente-mensuales') }}" >Mensuales</a>
        <i class="fa fa-angle-right"></i>
        </li>
</ul>
@endsection



<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Clientes</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


<div class="box-body">
<ul class="nav nav-tabs">
  <li ><a href="{{ url('cliente') }}">Clientes Semanales </a></li>
  <li><a href="{{ url('cliente-quincenales') }}">Clientes Quincenales</a></li>
  <li ><a href="{{ url('cliente-mensuales') }}">Clientes Mensuales </a></li>
  <li class="active"><a href="{{ url('clientes-all') }}">Todos los Clientes ({{$count}})</a></li>
</ul>
</div>


<!--buscador-->
{!!Form::open(['url'=>'cliente-mensuales', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
  {!!Form::label('')!!}
  {!!Form::text('nombr',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
  {!!Form::text('direcc',null,['class'=>'form-control','placeholder'=>'Direccion'])!!}
 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->

     </div><!--end caption-->




    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-cliente"><i class="fa fa-plus fa-lg"></i></button>

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#precios"><i class="fa fa-money fa-lg"></i> Precios</button>
      
       </div>
   </div>


        </div><!--portlet-title-->
   <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
  <thead>
    
    <th>Nombre</th>
    <th>Apellido</th>
    <!--<th>Razon social</th>-->
    <th>Telefono</th>
    <!--<th>Correo</th>
      <th>Cuit</th>-->
    <th class="col-md-3">Direccion</th>
    <th>N* Depto</th>
    <!--<th>Tipo de Pago</th>-->
    <th>lun</th>
    <th>mar</th>
    <th>mie</th>
    <th>jue</th>
    <th>vie</th>
    <th>sab</th>
    <th>dom</th>
  </thead>
  @foreach($clientes as $cliente)
   
  <tbody>
  <!-- -->
  <td>{{ $cliente -> nombre}}</td>
  <td>{{ $cliente -> apellido}}</td>
  <!--<td>{{ $cliente -> razonsocial}}</td>-->
  <td>{{ $cliente -> telefono}}</td>
  <!--<td>{{ $cliente -> email}}</td>
    <td>{{ $cliente -> cuit}}</td>-->
  <td>{{ $cliente -> direccion}}</td>
  <td>{{ $cliente -> departamento}}</td>
  <!--<td>{{ $cliente -> tipo}}</td>-->
  <td>@if($cliente -> lunes == 1) si @else no @endif</td>
  <td>@if($cliente -> martes == 1) si @else no @endif</td>
  <td>@if($cliente -> miercoles == 1) si @else no @endif</td>
  <td>@if($cliente -> jueves == 1) si @else no @endif</td>
  <td>@if($cliente -> viernes == 1) si @else no @endif</td>
  <td>@if($cliente -> sabado == 1) si @else no @endif</td>
  <td>@if($cliente -> domingo == 1) si @else no @endif</td>
  
  


  </tbody>

  @endforeach
  </table>

  <!--para renderizar la paginacion-->
 
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>





                          

@endsection
