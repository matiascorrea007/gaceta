
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Datos para la Reparacion</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-desktop font-blue"> Equipo :</i></span>
	{!!Form::text('equipo',null,['class'=>'form-control datepicker','placeholder'=>'nombre del equipo'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-barcode font-blue"> N* Serie :</i></span>
	{!!Form::text('serie',null,['class'=>'form-control datepicker','placeholder'=>'ingrese el Numero de Serie'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-cubes font-blue"> Accesorios :</i></span>
	{!!Form::text('accesorio',null,['class'=>'form-control datepicker','placeholder'=>'ingrese los Accesorios'])!!}
</div>
</div>

</div>
</div>
</div>










<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Falla del Equipo</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12"><br>
	{!!Form::textarea ('falla',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la Falla', 'row' => 100, 'cols' => 80])!!}
</div>

</div>
</div>
</div>








<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Observacion del Equipo</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12"><br>
	{!!Form::textarea ('observaciones',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la Observacion', 'row' => 100, 'cols' => 80])!!}
</div>

</div>
</div>
</div>
