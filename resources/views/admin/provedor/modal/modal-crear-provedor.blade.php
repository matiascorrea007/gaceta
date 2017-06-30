<div class="modal fade" id="crear-provedor" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-full" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Crear Provedor </h4>
         </div>



{{ Form::open(['url' => ['provedor-store'], 'method' => 'POST', 'files'=>True]) }}

<div class="modal-body">      
{{ Html::image('storage/user/avatar.png' , 'img', array('class' => 'user-image center-block' , 'style'=>'height:100px')) }}<br>

@include('admin.provedor.forms.formscreate')
</div>

<div class="modal-footer">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>