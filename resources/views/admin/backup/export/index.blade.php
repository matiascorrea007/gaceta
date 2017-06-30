@extends('layouts.metronic')
@section('content')
@include('alerts.request')


<?php

/*Conexion MySQLi*/

$hostname = 'localhost'; // Your host name
$database = 'gestion'; // Your database name here
$username = 'root'; // Your mysql username here
$password = '4247875'; // Your mysql password here

if ($database == '') {
  ?>
  <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    Debes configurar el archivo de conexion con MySQL ubicado en src/php/conexion.php
    <br> <small>Error: El nombre de la base de datos no ha sido definido.</small>
  </div>
  <?php
}
# De lo contrario hace la conexion
else{
  # conexion MySQLi
  $sql = new mysqli($hostname, $username, $password, $database);
  if ($sql->connect_errno) {
    echo "Error de conexión MySQLi" . '<br>';
    echo "Conexión Error: " . $sql->error;
  }
  else{
    date_default_timezone_set('America/Caracas');
    $sql->query("SET NAMES UTF8");
  }
}
?>




<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-database font-red"></i>
<span class="caption-subject font-red sbold uppercase">Respaldo de la Base de Datos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
      <!--botones-->
       </div>
   </div>


        </div><!--portlet-title-->
        
            <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
          <div class="space-container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Exportar base de datos: </h3>
              </div>
              <div class="panel-body">
                <form method="post">
                  <!--Extencion del fichero-->
                  <div class="form-group">
                    <label for="extencion"><strong>Extención</strong> (*)</label>
                    <select class="form-control" name="extencion" id="extencion">
                      <option value="0">Seleccione una opción</option>
                      <option value=".sql">SQL - Fichero de base de datos</option>
                      <option value=".txt">TXT - Fichero de blog de notas</option>
                    </select>
                  </div>
                  <!--Formato de salida-->
                  <div class="form-group">
                    <label for="extencion"><strong>Comprimir</strong></label>
                    <select class="form-control" name="formato" id="formato">
                      <option value="0">No comprimir</option>
                      <option value=".zip">ZIP - fichero zip</option>
                      <option value=".rar">RAR - fichero rar</option>
                    </select>
                  </div>
                  <!--Descargar-->
                  <div class="form-group text-left">
                    <label for="down">Descargar</label>
                    <input type="checkbox" name="down" id="down" checked>
                  </div>
                  <!--Boton para enviar-->
                  <div class="form-group">
                    <input type="hidden" id="ROOT" name="ROOT" value="ROOT">
                    <input type="hidden" id="FOLDER_ROOT" name="FOLDER_ROOT" value="FOLDER_ROOT">
                    <button type="button" name="button" id="button" class="btn btn-primary">Exportar</button>
                  </div>
                  <!--Respuesta ajax y javascript-->
                  <div class="form-group" id="respuesta" style="display:none;">
                    <!--Respuesta-->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Javascript-->


            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

                          

@endsection
