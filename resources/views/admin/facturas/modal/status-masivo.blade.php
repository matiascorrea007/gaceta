<div class="modal fade " id="status-masivo" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
 
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Cambiar Status Masivo</h4>
      </div>



<div class="container">


<div class="form-horizontal">
	<span class="label label-success">{!!Form::label('Pagado', 'Pagado') !!}</span>
	<input name="pago" 	type="radio" value="pagado" checked="checked" >
</div>
<div class="form-horizontal">
	<span class="label label-warning">{!!Form::label('Pendiente', 'Pendiente') !!}</span>
	<input name="pago" type="radio" value="pendiente" >
</div>
<div class="form-horizontal">
	<span class="label label-danger">{!!Form::label('Cancelado', 'Cancelado') !!}</span>
	<input name="pago" type="radio" value="cancelado" >
</div>


<br><br>
{!!Form::submit('Cambiar Estado',['class'=>'btn btn-primary'])!!}

</div>

	
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
     </div>
   </div>
 </div>
