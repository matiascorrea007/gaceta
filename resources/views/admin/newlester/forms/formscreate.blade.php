<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Datos del Email</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-group col-xs-12 col-sm-12 col-md-12">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Asunto :</i></span>
	{!!Form::text('asunto',null,['class'=>'form-control'])!!}
</div>
</div>

</div>
</div>




<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Mensaje</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-horizontal ">
  {!!Form::textarea ('mensaje',null,['class'=>'form-control my-editor','id'=>'lfm','placeholder'=>'ingrese la Descripcion'])!!}<br><br><br>
</div>


</div>
</div>







