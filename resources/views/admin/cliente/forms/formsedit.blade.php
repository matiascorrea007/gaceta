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
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'ingrese la direccion','value'=>'{{$cliente->direccion}}'])!!}
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
	{!! Form::select('tipo', config('options.tipodepago'),$cliente->tipo, array('class' => 'form-control')) !!}
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
        {!!Form::checkbox('habilitado',1)!!}
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
        {!!Form::checkbox('lunes',1)!!}
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Martes
        {!!Form::checkbox('martes',1)!!}
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Miercoles
       {!!Form::checkbox('miercoles',1)!!}
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Jueves
        {!!Form::checkbox('jueves',1)!!}
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Viernes
        {!!Form::checkbox('viernes',1)!!}
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Sabado
        {!!Form::checkbox('sabado',1)!!}
          <span></span>
        </label>
    </div>
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
<div class="md-checkbox-list">
    <div class="mt-checkbox-list ">
        <label class="mt-checkbox"> Domingo
        {!!Form::checkbox('domingo',1)!!}
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



 
