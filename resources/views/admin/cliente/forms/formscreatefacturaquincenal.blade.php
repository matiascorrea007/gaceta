<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Factura Quincenal</h3>
 		</div>	
  <div class="panel-body">
<div class="row">



<div class="form-group col-xs-12 col-sm-12 col-md-2">
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Inicial de Facturacion')!!}
{!!Form::text('desde',null,['class'=>'form-control','id'=>'datepicker3','placeholder'=>'Fecha de Inicio'])!!}
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Final de Facturacion')!!}
{!!Form::text('hasta',null,['class'=>'form-control','id'=>'datepicker4','placeholder'=>'Fecha de Inicio'])!!}
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-2">
</div>

</div>
</div>
</div>