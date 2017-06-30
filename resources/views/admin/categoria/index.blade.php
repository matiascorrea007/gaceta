@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->

 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-th-list font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Categorias</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

      <a class="btn btn-success" data-toggle="modal" data-target="#crear-categoria">
      <i class="fa fa-plus fa-lg"></i></a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Categoria</th>
    <th>Icono</th>
    <th>banner</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($categorias as $categoria)
    <tbody>
  <td>{{ $categoria -> id}}</td>
  <td>{{ $categoria -> nombre}}</td>
  <td><i class="icon fa fa-fw"><img src="storage/categorias/{{$categoria->icon}}"></i></td>
  <td><i class="icon fa fa-fw"><img src="storage/banner/{{$categoria->banner}}"  width="40" height="40"></i></td>   

<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ver-{{ $categoria->id }}"><i class="fa fa-expand"> Ver</i></button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $categoria->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $categoria->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
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
 @include('admin.categoria.modal.modal-edit-categoria')
<!--modal eliminar usuario-->
 @include('admin.categoria.modal.modal-delete-categoria')
 <!--modal ver usuario-->
 @include('admin.categoria.modal.modal-ver-categoria')
  <!--modal crear usuario-->
 @include('admin.categoria.modal.modal-crear-categoria')




















 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Sub-Categorias</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

      <a class="btn btn-success" data-toggle="modal" data-target="#crear-subcategoria">
      <i class="fa fa-plus fa-lg"></i></a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Sub-Categoria</th>
    <th>Categoria Padre</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($subcategorias as $subcategoria)
    <tbody>
      <td>{{ $subcategoria -> id}}</td>
      <td>{{ $subcategoria -> nombre}}</td>
      <td>{{ $subcategoria->categoria->nombre}}</td>

<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#verSub-{{ $subcategoria->id }}"><i class="fa fa-expand"> Ver</i></button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditSub-{{ $subcategoria->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteSub-{{ $subcategoria->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
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
 @include('admin.categoria.modal.modal-edit-categoriasub')
<!--modal eliminar usuario-->
 @include('admin.categoria.modal.modal-delete-categoriasub')
 <!--modal ver usuario-->
 @include('admin.categoria.modal.modal-ver-categoriasub')
  <!--modal crear usuario-->
 @include('admin.categoria.modal.modal-crear-categoriasub')

@endsection
