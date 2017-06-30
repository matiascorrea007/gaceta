<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Nombre y Apellido</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Nombre :</i></span>
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'ingrese el nombre'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Apellido :</i></span>
	{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'ingrese el Apellido'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Razon Social :</i></span>
	{!!Form::text('razonsocial',null,['class'=>'form-control','placeholder'=>'ingrese la Razonsocial'])!!}
</div>
</div>


</div>
</div>
</div>







<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Direccion , Tel , Email</h3>
 		</div>	
  <div class="panel-body">


<div class="row">
	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right ">
 	<span class="input-group-addon"><i class="fa fa-phone font-blue"> Telefono :</i></span>
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'ingrese el telefono'])!!}
	</div>
	</div>


	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right ">
 	<span class="input-group-addon"><i class="fa fa-envelope font-blue"> Email :</i></span>
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'ingrese el email'])!!}
	</div>
	</div>

	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right ">
 	<span class="input-group-addon"><i class="fa fa-book font-blue"> Cuit :</i></span>
		{!!Form::text('cuit',null,['class'=>'form-control','placeholder'=>'ingrese el Cuit'])!!}
	</div>
	</div>
</div>




<div class="row">
	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right ">
 	<span class="input-group-addon"><i class="fa fa-bank font-blue"> Iva :</i></span>
		{!!Form::select('iva_id',$ivas,'',['class'=>' form-control'])!!}
	</div>
	</div>

	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right ">
 	<span class="input-group-addon"><i class="fa fa-map-marker font-blue"> Direccion :</i></span>
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'ingrese la direccion'])!!}
	</div>
	</div>


	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right ">
 	<span class="input-group-addon"><i class="fa fa-bus font-blue"> Transporte :</i></span>
		{!!Form::select('transporte_id',$transportes,'',['class'=>' form-control'])!!}
	</div>
	</div>
</div>


</div>
</div>


<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Opciones</h3>
 		</div>	
  <div class="panel-body">
<div class="row">



 <div class="portlet light ">
<div class="form-group form-md-checkboxes">
<div class="md-checkbox-list">
    <div class="md-checkbox has-success">
        <input type="checkbox" id="checkbox1" class="md-check" name="habilitado" checked>
        <label for="checkbox1">
            <span></span>
            <span class="check"></span>
            <span class="box"></span> habilitado </label>
    </div>
</div>
</div>
</div>




 <div class="portlet light ">
<div class="form-group form-md-checkboxes">
<div class="md-checkbox-list">
    <div class="md-checkbox has-success">
        <input type="checkbox" id="checkbox2" class="md-check" name="cuentacorriente">
        <label for="checkbox2">
            <span></span>
            <span class="check"></span>
            <span class="box"></span> Habilitar Cta Cte </label>
    </div>
</div>
</div>
</div>



</div>
</div>
</div>






<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Comentario</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal ">
	{!!Form::textarea ('observacion',null,['class'=>'form-control my-editor','id'=>'lfm','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
</div>


</div>
</div>
</div>





 
