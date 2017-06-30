@foreach($compras as $compra)
<div class="modal fade " id="datalle-{{ $compra->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">

          <!----------------------------   tabla del vendedor   -------------------->
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Detalle del Comprador</h4>
      </div>
 <table id="example2" class="table table-bordered table-hover">
  <thead>
      <tr>
    <th>Nombre</th>
    <th>Apellido</td>
    <th>Email</th>
    <th>Perfil</th>
    <th>Cuit</th>
      </tr>
    </thead>
    <tbody>
   <td>{{ $compra->user->nombre }}</td>
   <td>{{ $compra->user->apellido }}</td>
   <td>{{ $compra->user->email }}</td>
   <td>{{ $compra->user->perfil->descripcion }}</td>
  </tbody>
  </table>

      <!----------------------------  tabla del Cliente   -------------------->
     <div class="modal-header">
      <h4 class="modal-title">Detalle del Provedor</h4>
     </div>
 <table id="example2" class="table table-bordered table-hover">
  <thead>
      <tr>
    <th>Razon Social</th>
    <th>Contacto</td>
    <th>Email</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Cuit</th>
      </tr>
    </thead>
    <tbody>
   <td>{{ $compra->provedore->razonsocial}}</td>
   <td>{{ $compra->provedore->contacto }}</td>
   <td>{{ $compra->provedore->email }}</td>
   <td>{{ $compra->provedore->direccion }}</td>
   <td>{{ $compra->provedore->telefono }}</td>
   <td>{{ $compra->provedore->cuit }}</td>
  </tbody>
  </table>

      <!----------------------------   tabla del Producto   -------------------->
    <div class="modal-header">
        <h4 class="modal-title">Detalle de los Productos</h4>
    </div>
    <div class="table-responsive">
  <table id="example2" class="table table-bordered table-hover">
  <thead>
      <tr>
    <th>Imagen</th>
    <th>Codigo</td>
    <th>Descripcion</th>
    <th>Cantidad</th>
    <th>Precio Compra</th>
    <th>Marca</th>
    <th>Total</th>
      </tr>
    </thead>
    <!--solo muestro las transacciones con el id de sa compra-->
    @foreach($transactions as $transaction)
    @if ($compra->id == $transaction->compra_id )
    <tbody>
   <td> <img src="{{ $transaction->producto->imagen1 }}" height="50" width="50"> </td>
   <td>{{ $transaction->producto->codigo }}</td>
   <td>{{ $transaction->producto->descripcion }}</td>
   <td>{{ $transaction->cantidad }}</td>
   <td>{{ $transaction->producto->preciocosto }}</td>
   <td>{{ $transaction->producto->marca->descripcion }}</td>
   <td>{{ $transaction->total_price }}</td>
  </tbody>
  @endif
  @endforeach
  </table>
        <h3>
          <span class="label label-success pull-right">
            Total: ${{ $compra -> total}}
          </span>
        </h3>
</div>
<br>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
     </div>
   </div>
 </div>
@endforeach
