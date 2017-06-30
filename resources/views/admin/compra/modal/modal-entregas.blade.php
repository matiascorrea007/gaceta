@foreach($compras as $compra)
<div class="modal fade " id="entrega-{{ $compra->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
 
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Cambiar Entrega de la Compra</h4>
      </div>



<div class="container">
  {!!Form::open(['route'=>['compra.cambiarEntrega',$compra->id], 'method'=>'POST' ])!!}

<div class="form-horizontal">
	<span class="label label-success">{!!Form::label('Entregado', 'Entregado') !!}</span>
	<input name="pago" 	type="radio" value="Entregado" checked="checked" >
</div>
<div class="form-horizontal">
	<span class="label label-warning">{!!Form::label('No Entregado', 'No Entregado') !!}</span>
	<input name="pago" type="radio" value="No Entregado" >
</div>
<div class="form-horizontal">
	<span class="label label-danger">{!!Form::label('Cancelado', 'Cancelado') !!}</span>
	<input name="pago" type="radio" value="Cancelado" >
</div>


<br><br>
{!!Form::submit('Cambiar Estado',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
</div>

	
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
     </div>
   </div>
 </div>
@endforeach
