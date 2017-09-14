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

<div class="row">

<div class="form-group col-xs-12 col-sm-12 col-md-4">
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
            <div class="input-group input-icon right ">
            <span class="input-group-addon"><i class="fa fa-money font-blue"></i></span>
                  <input class="form-control " type="text"  name="recargo" size="12" value="" placeholder="Ingrese un valor de Recargo"  >
            </div>
        </div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
</div>

</div>


</div>
</div>