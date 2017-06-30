
<div class="modal bs-example-modal-lg fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Ver post </h4>
         </div>

{!!Form::model(['url'=>['post-update'],'method'=>'PUT' , 'files'=>True])!!}

<div class="modal-body">   
<fieldset disabled>
@include('admin.post.forms.formscreate')
</fieldset>  
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
