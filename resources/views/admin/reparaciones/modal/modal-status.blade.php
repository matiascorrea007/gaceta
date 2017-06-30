@foreach($reparaciones as $reparacione)
<div class="modal fade " id="status-{{ $reparacione->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
 
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Cambiar Status de la Reparacion</h4>
      </div>



<div class="container">
  {!!Form::open(['url'=>['reparacion-cambiar-status',$reparacione->id], 'method'=>'POST' ])!!}

<div class="form-horizontal">
  <span class="label label-success">{!!Form::label('SOLUCIONADO', 'SOLUCIONADO') !!}</span>
  <input name="pago"  type="radio" value="SOLUCIONADO" checked="checked" >
</div>
<div class="form-horizontal">
  <span class="label label-warning">{!!Form::label('PENDIENTE', 'PENDIENTE') !!}</span>
  <input name="pago" type="radio" value="PENDIENTE" >
</div>
<div class="form-horizontal">
  <span class="label label-danger">{!!Form::label('CANCELADO', 'CANCELADO') !!}</span>
  <input name="pago" type="radio" value="CANCELADO" >
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
