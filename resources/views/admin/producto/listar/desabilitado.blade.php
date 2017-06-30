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
<span class="caption-subject font-red sbold uppercase">Seccion de Productos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


    <div class="box-body">
<ul class="nav nav-tabs">
  <li ><a href="{{ url('producto') }}">Todos </a></li>
  <li><a href="{{ url('producto-combo') }}">Combos</a></li>
  <li><a href="{{ url('producto-oferta') }}">Oferta</a></li>
  <li><a href="{{ url('producto-stock-critico') }}">Stock Critico</a></li>
  <li class="active"><a href="{{ url('producto-desabilitado') }}">Desabilitados ({{$count}})</a></li>
  <li><a href="{{ url('producto-review') }}">Review</a></li>
</ul>
</div>

<!--buscador-->
{!!Form::open(['url'=>'producto', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
{!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo'])!!}
{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion'])!!}
 <button type="submit" class="fa  fa-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador--> 




     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

  
<br><a class="btn btn-success" href="{!! URL::to('producto-create') !!}">
  <i class="fa fa-cubes fa-lg"></i> Nuevo Producto</a>

<a class="btn btn-success" href="{!! URL::to('producto-combo-pc') !!}">
  <i class="fa fa-desktop fa-lg"></i> Nuevo Combo</a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">       
  <thead>
    <th>Codigo</th>
    <th>Imagen</th>
    <th>Descripcion</th>
    <!--<th>Iva</th>-->
    <!--<th>Costo</th>-->
    <th>venta</th>
    <!--<th>venta 2</th>-->
    <th>Stock</th>
    
    <th class="col-md-6">Operaciones</th>
  </thead>
  @foreach($productos as $producto)
  <tbody>
  <!-- -->
  <td>{{ $producto -> codigo}}</td>


  <!-- si es sin foto cargo la foto por defecto -->
  @if($producto->imagen1 == "sin-foto.jpg")
    <td><img src="storage/productos/{{$producto->imagen1}}" alt="" height="100" width="100" ></td>
     <!-- caso contrario cargo la foto -->
  @elseif($producto->imagen1 != "sin-foto.jpg")
    <td><img src="{{$producto->imagen1}}" alt="" height="100" width="100" ></td>
  @endif
  

    <td>{{ $producto -> descripcion}}</td>
    <!--<td>{{ $producto -> iva_id}}</td>-->
    <!--<td>{{ $producto -> preciocosto}}</td>-->
    <td>{{ $producto -> precioventa}}</td>
    <!--<td>{{ $producto -> precio2}}</td>-->
    <td>{{ $producto -> stockactual}}</td>

<td>
<a class="btn btn-warning btn-lg fa fa-eye" href="{!! URL::to('producto-show-'.$producto->id) !!}"></a>

<a class="btn btn-success btn-lg fa fa-picture-o" href="{!! URL::to('producto-uploadimagen-'.$producto->id) !!}"></a>

<a class="btn btn-primary btn-lg fa fa-edit" href="{!! URL::to('producto-edit-'.$producto->id) !!}"></a>

<a class="btn btn-success btn-lg fa fa-globe" href="{!! URL::to('item-detalle-'.$producto->slug) !!}"></a>

<a class="btn btn-info btn-lg fa fa-envelope" href="{!! URL::to('producto-review-'.$producto->slug) !!}"></a>

<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger btn-lg fa fa-trash-o" data-toggle="modal" data-target="#confirmDelete-{{ $producto->id }}"></button>
@endif

</td>
@endforeach
  </tbody>
  
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


<!--modal de eliminar producto-->
 @include('admin.producto.modal.modal-delete-producto')


<!--para renderizar la paginacion
appends(Request::only(['codigo','descripcion'])) con esto solucionamos para no perder la paginacion cuando se usan filtros-->
  {!! $productos->appends(Request::only(['codigo','descripcion']))->render() !!}

@endsection
