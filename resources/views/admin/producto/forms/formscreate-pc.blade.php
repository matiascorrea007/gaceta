

<style>
.color1{

	color: #00ba8b;
}	
</style>
<br><br>



<!-- .................................... tabla Item de la PC................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Items</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>
<td>





<!--gabinetes-->
<div class="form-horizontal">
{!!Form::label('Gabinetes')!!} <br>
<select  class="form-control importe_linea" name="gabinete" id="gabinete">
  @foreach($gabinetes as $gabinete)
    <option  value="{{$gabinete->id}}">{{$gabinete->descripcion}} -----${{$gabinete->precioventa}}
   </option>
   @endforeach
</select>

</div>



<!--mother-->
<div class="form-horizontal">
{!!Form::label('Mother')!!} <br>
<select  class="form-control importe_linea" name="mother" id="mother">
  @foreach($mothers as $mother)
    <option  value="{{$mother->id}}">{{$mother->descripcion}} -----${{$mother->precioventa}}</option>
   @endforeach
</select>
</div>

<!--procesadore-->
<div class="form-horizontal">
{!!Form::label('Procesadores')!!} <br>
<select   class="form-control importe_linea" name="procesador" id="procesador">
  @foreach($procesadores as $procesadore)
    <option value="{{$procesadore->id}}">{{$procesadore->descripcion}} -----${{$procesadore->precioventa}}</option>
   @endforeach
</select>
</div>


<!--mouse-->
<div class="form-horizontal">
{!!Form::label('Mouses')!!} <br>
<select   class="form-control importe_linea" name="mouse" id="mouse">
  @foreach($mouses as $mouse)
    <option value="{{$mouse->id}}">{{$mouse->descripcion}} -----${{$mouse->precioventa}}</option>
   @endforeach
</select>
</div>


<!--teclado-->
<div class="form-horizontal">
{!!Form::label('Teclados')!!} <br>
<select  class="form-control importe_linea" name="teclado" id="teclado">
  @foreach($teclados as $teclado)
    <option value="{{$teclado->id}}">{{$teclado->descripcion}} -----${{$teclado->precioventa}}</option>
   @endforeach
</select>
</div>




</td>
<td>


<!--video-->
<div class="form-horizontal">
{!!Form::label('Videos')!!} <br>
<select class="form-control importe_linea" name="video" id="video">
  @foreach($videos as $video)
    <option value="{{$video->id}}">{{$video->descripcion}} -----${{$video->precioventa}}</option>
   @endforeach
</select>
</div>


<!--Fuentes-->
<div class="form-horizontal">
{!!Form::label('Fuentes')!!} <br>
<select class="form-control importe_linea" name="fuente" id="fuente">
  @foreach($fuentes as $fuente)
    <option value="{{$fuente->id}}">{{$fuente->descripcion}} -----${{$fuente->precioventa}}</option>
   @endforeach
</select>
</div>


<!--Discos-->
<div class="form-horizontal">
{!!Form::label('Discos')!!} <br>
<select class="form-control importe_linea" name="disco" id="disco">
  @foreach($discos as $disco)
    <option value="{{$disco->id}}">{{$disco->descripcion}} -----${{$disco->precioventa}}</option>
   @endforeach
</select>
</div>

<!--Memorias-->
<div class="form-horizontal">
{!!Form::label('Memorias')!!} <br>
<select class="form-control importe_linea" name="memoria" id="memoria">
  @foreach($memorias as $memoria)
    <option value="{{$memoria->id}}">{{$memoria->descripcion}} -----${{$memoria->precioventa}}</option>
   @endforeach
</select>
</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"/>
<!--BOTONES-->
<br>
<h3><label for="total">Total: $<input type="text" id="total" value="0"/></h3>
<input type="button" value="Calcular" id="calcularTotal" class="btn btn-primary" />

<br><br><br>



</div>
</td>

</tbody>
</table>

</div>
</div>
</div>



<!-- .......................... tabla descripcion......................... -->

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion y Codigo</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>

<td>
<!--codigo-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('codigo:')!!}
	{!!Form::text('codigo',null,['class'=>'form-control ','placeholder'=>'ingrese el codigo del producto'])!!}
</div>

<!--descripcion-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('descripcion:')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control ','placeholder'=>'ingrese descripcion del producto'])!!}
</div>

</td>
</tbody>
</table>

</div>
</div>
</div>

<!-- .................................... tabla Precios................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Precios</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>
<td>
<!--precio costo-->
<div class="form-horizontal">
	{!!Form::label('precio costo')!!}
	{!!Form::text('preciocosto',null,['id'=>'costo', 'class'=>'form-control','placeholder'=>'ingrese el precio de costo'])!!}
</div>

<!--iva id-->
<div class="form-horizontal">
	{!!Form::label('iva id')!!} <br>
	{!!Form::select('iva_id',$ivatipos,'',['class'=>'form-control'])!!}
</div>
</td>
<td>
<!--precio venta-->
<div class="form-horizontal" >
	{!!Form::label('precio venta')!!}
	{!!Form::text('precioventa',null,['class'=>'form-control','id'=>'resultado','placeholder'=>'ingrese el precio de venta'])!!}
</div>

<!--rentabilidad 1-->
<div class="form-horizontal">
	{!!Form::label('Ingrese el Descuento(%):')!!}
	<input class="descuento form-control" onblur="if(this.value == ''){this.value='0'}"  onKeyUp="calcular_descuento();" type="text" id="desc1" value="0">
</div>

</td>
<td>
<!--precio 2-->
<div class="form-horizontal">
	{!!Form::label('precio tachado')!!}
	{!!Form::text('precio2',null,['class'=>'form-control','placeholder'=>'ingrese el precio 2'])!!}
</div>

</td>

</tbody>
</table>

</div>
</div>
</div>

<!-- .................................... tabla stock................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Stock</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>

</thead>
<tbody>


<td>
<!--stock actul-->
<div class="form-horizontal">
	{!!Form::label('stock actul')!!}
	{!!Form::text('stockactual',null,['class'=>'form-control','placeholder'=>'ingrese el stock actul'])!!}
</div>
</td>
<td>
<!--stock critico-->
<div class="form-horizontal">
	{!!Form::label('stock critico')!!}
	{!!Form::text('stockcritico',null,['class'=>'form-control','placeholder'=>'ingrese el stock critico'])!!}
</div>
</td>
<td>
<!--stock pedido-->
<div class="form-horizontal">
	{!!Form::label('stock pedido')!!}
	{!!Form::text('stockpedido',null,['class'=>'form-control','placeholder'=>'ingrese el stock de pedido'])!!}
</div>
</td>
</tbody>
</table>

</div>
</div>
</div>

<!-- ...........................tabla Rubro , Marca y Provedor................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Rubro , Marca y Provedor</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>
<td>
<!--rubro id-->
<div class="form-horizontal">
	{!!Form::label('rubro id')!!}
	{!!Form::select('rubro_id',$rubros,null,['class'=>'form-control'])!!}
</div>
</td>
<td>
<!--marca id-->
<div class="form-horizontal">
	{!!Form::label('marca id')!!}
	{!!Form::select('marca_id',$marcas,null,['class'=>'form-control'])!!}
</div>
</td>
<td>
<!--provedor-->
<div class="form-horizontal">
	{!!Form::label('provedores')!!}
	{!!Form::select('provedor_id',$provedores,null,['class'=>'form-control'])!!}
</div>
</td>
</tbody>
</table>

</div>
</div>
</div>


<!-- .................Categoria y sub categorias........................ -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Categoria</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<!--categoria-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	<label for="">Categorias</label>
	<select class="form-control input-sm" name="categoria_id" id="categoria">
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


<!-- ...........................tabla otras opciones................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Otras Opciones</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>
<td>
<!--codigo alternativo-->
<div class="form-horizontal">
	{!!Form::label('codigo alternativo')!!}
	{!!Form::text('cod_alter',null,['class'=>'form-control','placeholder'=>'ingrese el codigo alternativo'])!!}
</div>
</td>

<td>
<!--ubicacion-->
<div class="form-horizontal ">
	{!!Form::label('ubicacion')!!}
	{!!Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>'ingrese la ubicacion'])!!}
</div>
</td>

<td>
<!--codigo de bulto-->
<div class="form-horizontal ">
	{!!Form::label('codigo de bulto')!!}
	{!!Form::text('cod_bulto',null,['class'=>'form-control','placeholder'=>'ingrese el codigo de bulto'])!!}
</div>
<!--cantidad de bulto-->
<div class="form-horizontal ">
	{!!Form::label('cantidad de bulto')!!}
	{!!Form::text('cant_bulto',null,['class'=>'form-control','placeholder'=>'ingrese la cantidad de bulto'])!!}
</div>

</td>

</tbody>
</table>

</div>
</div>
</div>


<!--observacioes-->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion Corta</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcioncorta',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
</div>

</div>
</div>
</div>
<br>

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion Larga</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcionlarga',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la observacion', 'row' => 100, 'cols' => 80])!!}
</div>
<br>
</div>
</div>
</div>



<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Imagen de Portada</h3>
 		</div>	
  <div class="panel-body">
<div class="row">
<!--imagen-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('file', 'Imagen') !!}
	{!!Form::file('imagen1')!!}
</div>


</div>
</div>
</div>


<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Opciones del Producto</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('Habilitado en la Web')!!}
	{!!Form::checkbox('habilitado',1,true)!!}
</div>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('Productos Hot')!!}
	{!!Form::checkbox('hot',1,false)!!}
</div>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('Producto en Oferta')!!}
	{!!Form::checkbox('oferta',1,false)!!}
</div>

</div>
</div>
</div>



<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Tags</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
   <label for="tags" class="control-label"></label>
   <select name="tags[]" class="form-control" multiple="multiple" id="tags"></select>
</div>

</div>
</div>
</div>

