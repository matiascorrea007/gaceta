@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-bank font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion de Ivas</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>



     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

      <a class="btn btn-success" data-toggle="modal" data-target="#crear-iva" >
      <i class="fa  fa-plus fa-lg"></i> </a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
    <th>ID</th>
    <th>Descripcion</th>
    <th>Valor</th>
    <th class="col-md-4">Operaciones</th>   
  </thead>
  @foreach($ivatipos as $ivatipo)
  <tbody>
  <!-- -->
 <td>{{ $ivatipo -> id}}</td>
 <td>{{ $ivatipo -> descripcion}}</td>
 <td>{{ $ivatipo -> valor}}</td>

<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ver-{{ $ivatipo->id }}"><i class="fa fa-expand"> Ver</i></button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $ivatipo->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--nivel de acceso-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $ivatipo->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
@endif
</td>
  </tbody>
  @endforeach
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

<!--modal editar ivatipo-->
 @include('admin.configuracion.ivatipo.modal.modal-edit-ivatipo')
<!--modal eliminar ivatipo-->
 @include('admin.configuracion.ivatipo.modal.modal-delete-ivatipo')
 <!--modal ver ivatipo-->
 @include('admin.configuracion.ivatipo.modal.modal-ver-ivatipo')
  <!--modal crear ivatipo-->
 @include('admin.configuracion.ivatipo.modal.modal-crear-ivatipo')

<!--para renderizar la paginacion-->
{!! $ivatipos->render() !!}

@endsection
