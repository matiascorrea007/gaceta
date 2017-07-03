<div class="modal fade" id="precios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
 <div class="modal-dialog modal-full" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Ver Cliente {{ $cliente->nombre }}</h4>
         </div>


@if(empty($precios))

{!!Form::open(['url'=>['precio-store'],'method'=>'POST'])!!}

<div class="modal-body">  	
@include('admin.cliente.forms.formsprecios')
</fieldset>
</div>

<div class="modal-footer">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
</div>

{!!Form::close()!!}

@endif




@if(!empty($precios))
{!!Form::model($precios,['url'=>['precio-update',$precios->id],'method'=>'PUT'])!!}

<div class="modal-body">  
@include('admin.cliente.forms.formsprecios')
</fieldset>
</div>

<div class="modal-footer">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
</div>

{!!Form::close()!!}

@endif
     </div>
   </div>
 </div>
