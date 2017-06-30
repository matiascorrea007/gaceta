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
<span class="caption-subject font-red sbold uppercase">Cargar Imagen</span>
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

      {!!Form::model($producto,['route'=>['ProductoImagen.uploadFiles',$producto->id],'method'=>'POST' , 'files'=>true , 'id' => 'my-dropzone' , 'class' => 'dropzone'])!!}
    <div class="dz-message" style="height:200px;">
                        Drop your files here
    </div>
    <div class="dropzone-previews"></div>
    <button type="submit" class="btn btn-success" id="submit">Save</button>
{!! Form::close() !!}




        <div class="table-scrollable">
            <table class="table table-hover table-light">  
  <thead>
      <tr>
    <th>Imagen</th>
    <th>Portada</th>
    <th>Eliminar</th>
      </tr>
    </thead>
    @foreach($imagens as $imagen)
    <tbody>
   <td><i class="icon fa fa-fw"><img src="storage/productos/{{$imagen->producto->categoria->nombre}}/{{$imagen->producto->categoriasub->nombre}}/{{$imagen->producto->descripcion}}/{{$imagen->nombre}}"  width="100" height="80"></i></td>  

  <td></td>

<td>{!! Form::open(['method' => 'DELETE', 'route' => ['ProductoImagen.destroy',$imagen->id]]) !!}
<button type="submit" class="btn btn-danger">Delete</button>
{!! Form::close() !!}</td> 


  </tbody>
  @endforeach
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



@endsection
