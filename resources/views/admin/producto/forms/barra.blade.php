
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Filtrar por Categoria</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<!--categoria-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	<label for="">Categorias</label>
	<select class="form-control input-sm" name="categoria_id" id="categoria">
			<option value=""> seleccione una Categoria</option>
		@foreach($categorias as $categoria)
			<option value="{{ $categoria->id }}"> {{ $categoria->nombre }}</option>
		@endforeach
	</select>
</div>

<!--sub categoria-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	<label for="">Sub-Categorias</label>
	<select class="form-control input-sm" name="categoriasub_id" id="subcategoria">
		<option value="" ></option>
	</select>
</div>



</div>
</div>
</div>



<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Filtrar por Producto</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<!--categoria-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	<label for="">Producto desde</label>
	<select class="form-control input-sm" name="producto_desde">
			<option value=""> seleccione un producto</option>
		@foreach($productos as $producto)
			<option value="{{ $producto->id }}"> {{ $producto->descripcion }}</option>
		@endforeach
	</select>
</div>

<!--sub categoria-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	<label for="">Produto hasta</label>
	<select class="form-control input-sm" name="producto_hasta">
	<option value=""> seleccione un producto</option>
		@foreach($productos as $producto)
			<option value="{{ $producto->id }}"> {{ $producto->descripcion }}</option>
		@endforeach
	</select>
</div>



</div>
</div>
</div>
