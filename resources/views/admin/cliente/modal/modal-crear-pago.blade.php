
<div class="modal fade" id="crear-pago" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-full" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Crear Pago </h4>
         </div>


{!!Form::open(['url'=>['cliente-crear-pago'],'method'=>'POST'])!!}

<div class="modal-body">      
@include('admin.cliente.forms.formscreate')
</div>

<div class="modal-footer">
{!!Form::submit('Crear',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>