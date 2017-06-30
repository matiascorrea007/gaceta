<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">DETALLE</h3>
 		</div>	
  <div class="panel-body">
<div class="row">
	


  <div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-calendar font-blue"> Fecha :</i></span>
  {!!Form::text('fecha',null,['class'=>'form-control datepicker','placeholder'=>'Ingrese la fecha del Gasto'])!!}
</div>
</div>


  <div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-money font-blue"> Tipo de Gasto :</i></span>
  {!! Form::select('tipo_gasto', config('options.tipogasto'),'', array('class' => 'form-control')) !!}
</div>
</div>


  <div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-paypal font-blue"> Tipo de Pago :</i></span>
{!! Form::select('tipo_pago', config('options.tipopago'),'', array('class' => 'form-control')) !!}
</div>
</div>
  


  <div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-dollar font-blue"> Importe :</i></span>
{!!Form::text('importe',null,['class'=>'form-control ','placeholder'=>'ingrese descripcion del producto'])!!}
</div>
</div>




</div>
</div>
</div>


<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Justificante</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

  <div class="col-md-6">
	<div class="form-horizontal">
	{!!Form::file('justificante')!!}
	</div>
  </div>

</div>
</div>
</div>

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-horizontal ">
  {!!Form::textarea ('descripcion',null,['class'=>'form-control my-editor','id'=>'lfm','placeholder'=>'ingrese la Descripcion'])!!}<br><br><br>
</div>


</div>
</div>
</div>

