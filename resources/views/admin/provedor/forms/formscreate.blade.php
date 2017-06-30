
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Datos del Provedor</h3>
 		</div>	
  <div class="panel-body">



<div class="row">
<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user-secret font-blue"> Razon Socil :</i></span>
	{!!Form::text('razonsocial',null,['class'=>'form-control','placeholder'=>'ingrese la razon social'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Nombre y Apellido :</i></span>
	{!!Form::text('contacto',null,['class'=>'form-control','placeholder'=>'ingrese el contacto'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-envelope font-blue"> Email :</i></span>
	{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'ingrese el Correo'])!!}
</div>
</div>
</div><!-- end row-->



<div class="row">
<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-skype font-blue"> Skype :</i></span>
	{!!Form::text('skype',null,['class'=>'form-control','placeholder'=>'ingrese el Skype'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-map-marker font-blue"> Direccion :</i></span>
	{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'ingrese direccion'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-phone font-blue"> Telefono :</i></span>
	{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'ingrese el Telefono'])!!}
</div>
</div>

</div><!-- end row-->


<div class="row">
<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-calendar-check-o font-blue"> Dias de Visita :</i></span>
	{!!Form::text('dia_visita',null,['class'=>'form-control','placeholder'=>'ingrese los Dias de visita'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-book font-blue"> Cuit :</i></span>
	{!!Form::text('cuit',null,['class'=>'form-control','placeholder'=>'ingrese el Cuit'])!!}
</div>
</div>


 <div class=" ">
<div class="form-group form-md-checkboxes col-xs-12 col-sm-12 col-md-4">
<div class="md-checkbox-list">
    <div class="md-checkbox has-success">
        <input type="checkbox" id="checkbox2" class="md-check" name="habilitado" checked="">
        <label for="checkbox2">
            <span></span>
            <span class="check"></span>
            <span class="box"></span> Habilitado </label>
    </div>
</div>
</div>
</div>

</div><!-- end row-->


<div class="row">
	<div class="form-group col-xs-12 col-sm-12 col-md-12 ">
	{!!Form::textarea ('observacion',null,['class'=>'form-control my-editor','id'=>'lfm','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
</div>
</div><!-- end row-->

</div>
</div>








