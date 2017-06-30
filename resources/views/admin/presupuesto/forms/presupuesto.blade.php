<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Tipo de Pago</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>

<td>


		<div class="col-lg-3 col-sm-3 col-md-13 col-xs-3">
    		<div class="form-group">
            	<label for="cliente">Cliente</label>
            	<select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true">
                    @foreach($clientes as $cliente)
                     <option value="{{$cliente->id}}">Nombre: {{$cliente->nombre}}  --- Cuit: {{$cliente->cuit}}</option>
                     @endforeach
                </select>
            </div>
    			</div>

		<!--iva id-->
		<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
		{!!Form::label('Tipo de IVA')!!} <br>
		{!!Form::select('iva_id',$ivatipos,'',['class'=>'form-control'])!!}
		</div>

		<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
        <label for="tipo_pago" class="control-label">Tipo de pago</label>
        {!! Form::select('tipo_pago', config('options.tipopago'),'', array('class' => 'form-control')) !!}
        </div>


</td>
</tbody>
</table>

</div>
</div>
</div>









<div class="">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label>Artículo</label>
                        <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo" data-live-search="true">
                            @foreach($productos as $producto)
                            <option value="{{$producto->id}}_{{$producto->stockactual}}_{{$producto->precioventa}}">{{$producto->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="pcantidad" id="pcantidad" class="form-control" 
                        placeholder="cantidad">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" disabled name="pstock" id="pstock" class="form-control" 
                        placeholder="Stock">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="precio_venta">Precio venta</label>
                        <input type="number"  name="pprecio_venta" id="pprecio_venta" class="form-control" 
                        placeholder="P. venta">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="descuento">Descuento</label>
                        <input type="number" name="pdescuento" id="pdescuento" class="form-control" 
                        placeholder="Descuento" value="0">
                    </div>
                </div> 
                
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                       <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color:#A9D0F5">
                            <th>Opciones</th>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Precio Venta</th>
                            <th>Descuento</th>
                            <th>Subtotal</th>
                        </thead>
                        <tfoot>
                            <tr>
                                <th  colspan="5"><p align="right">TOTAL:</p></th>
                                <th><p align="right"><span id="total">S/. 0.00</span> <input type="hidden" name="total_venta" id="total_venta"></p></th>
                            </tr>
                            <tr>
                                <th colspan="5"><p align="right">TOTAL IMPUESTO (18%):</p></th>
                                <th><p align="right"><span id="total_impuesto">S/. 0.00</span></p></th>
                            </tr>
                            <tr>
                                <th  colspan="5"><p align="right">TOTAL PAGAR:</p></th>
                                <th><p align="right"><span align="right" id="total_pagar">S/. 0.00</span></p></th>
                            </tr>  
                        </tfoot>
                        <tbody>
                            
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
            <div class="form-group">
                <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
                <a href="{!! URL::to('venta-trash') !!}" class="btn btn-danger">Vaciar Venta <i class="fa fa-trash"></i></a>
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </div>
    </div>   