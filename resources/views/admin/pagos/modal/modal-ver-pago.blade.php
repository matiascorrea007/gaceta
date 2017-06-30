@foreach($pagos as $pago)
<div class="modal fade" id="ver-{{ $pago->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-full" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Ver pago </h4>
         </div>


{!!Form::model($pago,['url'=>['pago-update',$pago->id],'method'=>'PUT' , 'files'=>True])!!}

<div class="modal-body">
<fieldset disabled>      
{{ Html::image('storage/' . $pago->file , 'img', array('class' => 'user-image' , 'style'=>'height:100px')) }}
@include('admin.pagos.forms.formscreate')
</fieldset>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
	@endforeach