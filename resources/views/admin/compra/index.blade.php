@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cart-plus font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Compras - Nueva Compra</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>



     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <!--aqui van los botones-->
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">


  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <h3></h3>
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif
    </div>
  </div>


        {!!Form::open(array('url'=>'compra-checkout','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
          @include('admin.compra.forms.formscreate')
        {!!Form::close()!!}

                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true  
    });
  });
</script>
@stop


@section('compras')
<script>
 $(document).ready(function(){
    $('#bt_add').click(function(){
      agregar();
    });
  });

  var cont=0;
  total=0;
  subtotal=[];
  $("#guardar").hide();
  $("#pidarticulo").change(mostrarValores);
  $("#tipo_comprobante").change(marcarImpuesto);


  function mostrarValores()
  {
    datosArticulo=document.getElementById('pidarticulo').value.split('_');
    $("#pprecio_compra").val(datosArticulo[2]);
    $("#pstock").val(datosArticulo[1]);    
  }
  function marcarImpuesto()
  {
    tipo_comprobante=$("#tipo_comprobante option:selected").text();
    if (tipo_comprobante=='Factura')
    {
        $("#impuesto").prop("checked", true); 
    }
    else
    {
        $("#impuesto").prop("checked", false);
    }
  }

  function agregar()
  {
    datosArticulo=document.getElementById('pidarticulo').value.split('_');

    idarticulo=datosArticulo[0];
    articulo=$("#pidarticulo option:selected").text();
    cantidad=$("#pcantidad").val();

    descuento=$("#pdescuento").val();
    precio_compra=$("#pprecio_compra").val();

    stock=$("#pstock").val();

    if (idarticulo!="" && cantidad!="" && cantidad>0 && descuento!="" && precio_compra!="")
    {
        if (parseInt(stock)>=parseInt(cantidad))
        {
        subtotal[cont]=(cantidad*precio_compra-descuento);
        total=total+subtotal[cont];

        var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_compra[]" value="'+parseFloat(precio_compra).toFixed(2)+'"></td><td><input type="number" name="descuento[]" value="'+parseFloat(descuento).toFixed(2)+'"></td><td align="right">S/. '+parseFloat(subtotal[cont]).toFixed(2)+'</td></tr>';
        cont++;
        limpiar();
        totales();
        evaluar();
        $('#detalles').append(fila);   
        }
        else
        {
            alert ('La cantidad a vender supera el stock');
        }
        
    }
    else
    {
        alert("Error al ingresar el detalle de la venta, revise los datos del artículo");
    }
  }
  function limpiar(){
    $("#pcantidad").val("");
    $("#pdescuento").val("0");
    $("#pprecio_compra").val("");
  }
  function totales()
  {
        $("#total").html("S/. " + total.toFixed(2));
        $("#total_compra").val(total.toFixed(2));
        
        //Calcumos el impuesto
        if ($("#impuesto").is(":checked"))
        {
            por_impuesto=18;
        }
        else
        {
            por_impuesto=0;   
        }
        total_impuesto=total*por_impuesto/100;
        total_pagar=total+total_impuesto;
        $("#total_impuesto").html("S/. " + total_impuesto.toFixed(2));
        $("#total_pagar").html("S/. " + total_pagar.toFixed(2));
        
  }

  function evaluar()
  {
    if (total>0)
    {
      $("#guardar").show();
    }
    else
    {
      $("#guardar").hide(); 
    }
   }

   function eliminar(index){
    total=total-subtotal[index]; 
    totales();  
    $("#fila" + index).remove();
    evaluar();

  }
$('#liVentas').addClass("treeview active");
$('#liVentass').addClass("active");
</script>
@stop

@endsection
