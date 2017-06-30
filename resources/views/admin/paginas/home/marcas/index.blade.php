@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-image font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configurar Marcas</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

      <a class="btn btn-success" data-toggle="modal" data-target="#crear-marca" >
      <i class="fa  fa-plus fa-lg"></i></a>

       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Imagen</th>

    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($imagenesMarcas as $imagenesMarca)
    <tbody>
  <td>{{ $imagenesMarca -> id}}</td>
  <td><i class="icon fa fa-fw"><img src="storage/paginas/home/marcas/{{$imagenesMarca->imagen}}"  width="40" height="40"></i></td>  

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $imagenesMarca->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $imagenesMarca->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
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

<!--modal editar user-->
 @include('admin.paginas.home.marcas.modal.modal-edit-marcas')
<!--modal eliminar usuario-->
 @include('admin.paginas.home.marcas.modal.modal-delete-marcas')
 <!--modal crear usuario-->
 @include('admin.paginas.home.marcas.modal.modal-crear-marcas')

@endsection
