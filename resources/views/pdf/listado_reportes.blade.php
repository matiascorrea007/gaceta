@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-file-text font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Reportes</span>
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
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
  <thead>
    <th>ID</th>
    <th>reporte</th>
    <th>ver</th>
    <th>descargar</th>
  </thead>
  
  <tbody>
  <tr>
    
    <td>1</td>
    <td>Reporte de Usuarios por Pais</td>
    <td><a href="crear_reporte_porpais/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
    <td><a href="crear_reporte_porpais/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
              
  </tr>
  </tbody>
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>




@endsection
