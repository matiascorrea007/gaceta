<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Imagen de Usuario</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="input-group input-icon right col-xs-12 col-sm-12 col-md-3">
	{!!Form::file('path')!!}
</div>

</div>
</div>
</div>




<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Datos del usuario</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Nombre :</i></span>
	{!!Form::text('nombre',null,['class'=>'form-control'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Apellido :</i></span>
	{!!Form::text('apellido',null,['class'=>'form-control'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-key font-blue"> Password :</i></span>
	{!!Form::password('password',['class'=>'form-control'])!!}
</div>
</div>
</div>




<div class="row">
<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-key font-blue"> Re-Password :</i></span>
	{!!Form::text('re_password',null,['class'=>'form-control'])!!}
</div>
</div>



<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-envelope font-blue"> Email :</i></span>
	{!!Form::text('email',null,['class'=>'form-control'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-map-marker font-blue"></i> Direccion:</span>
	{!!Form::text('direccion',null,['class'=>'form-control'])!!}
</div>
</div>
</div>


<div class="row">
<div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-phone font-blue"> Telefono :</i></span>
	{!!Form::text('telefono',null,['class'=>'form-control'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-user font-red"> Tipo :</i></span>
	{!!Form::select('perfil_id',$perfils,null,['class'=>'form-control'])!!}
</div>
</div>
</div>


</div>
</div>




