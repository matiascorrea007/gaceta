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
 	<span class="input-group-addon"><i class="fa fa-map-marker font-blue"> Direccion :</i></span>
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'ingrese la direccion'])!!}
	</div>
	</div>

	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right ">
 	<span class="input-group-addon"><i class="fa fa-map-marker font-blue"> Departamento :</i></span>
	{!!Form::text('departamento',null,['class'=>'form-control','placeholder'=>'ingrese el numero del departamento'])!!}
	</div>
	</div>

	<div class="form-group col-xs-12 col-sm-12 col-md-4">
	<div class="input-group input-icon right">
 	<span class="input-group-addon"><i class="fa fa-money font-red"> Tipo De Pago :</i></span>
	{!! Form::select('tipo', config('options.tipodepago'),'', array('class' => 'form-control')) !!}
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
<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> habilitado
        <input type="checkbox" value="1" id="checkbox1"  name="habilitado" checked>
          <span></span>
        </label>
    </div>
</div>
</div>
</div>


</div>
</div>
</div>



<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Dias de Reparto de la Gaceta</h3>
 		</div>	
  <div class="panel-body">
<div class="row">



 <div class="portlet light ">
<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Lunes
        <input type="checkbox" value="1" id="checkbox1"  name="lunes" checked="checked">
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Martes
        <input type="checkbox" value="1" id="checkbox1"  name="martes" checked="checked">
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Miercoles
        <input type="checkbox" value="1" id="checkbox1"  name="miercoles" checked="checked">
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Jueves
        <input type="checkbox" value="1" id="checkbox1"  name="jueves" checked="checked">
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Viernes
        <input type="checkbox" value="1" id="checkbox1"  name="viernes" checked="checked">
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Sabado
        <input type="checkbox" value="1" id="checkbox1"  name="sabado" checked="checked">
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Domingo
        <input type="checkbox" value="1" id="checkbox1"  name="domingo" checked="checked">
          <span></span>
        </label>
    </div>
</div>
</div>



</div>
</div>
</div>
</div>



<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Repartido por</h3>
    </div>  
  <div class="panel-body">
<div class="row">



<div class="form-group col-xs-12 col-sm-12 col-md-12">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Reparto de 
        {!!Form::select('reparto_id',$reparto,null,['class'=>'form-control'])!!}
    </div>
</div>
</div>


</div>
</div>
</div>
</div>







 
