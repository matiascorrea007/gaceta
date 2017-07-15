<html>
<head>
<title>Factura Shark Informatica</title>


<style type="text/css">
  #page-wrap {
    width: 700px;
    margin: 0 auto;
  }
  .center-justified {
    text-align: justify;
    margin: 0 auto;
    width: 30em;
  }
  table.outline-table {
    border: 1px solid;
    border-spacing: 0;
    float: right;
  }

  .move-right{
    float: right;
  }

  tr.border-bottom td, td.border-bottom {
    border-bottom: 1px solid;
  }
  tr.border-top td, td.border-top {
    border-top: 1px solid;
  }
  tr.border-right td, td.border-right {
    border-right: 1px solid;
  }
  tr.border-right td:last-child {
    border-right: 0px;
  }
  tr.center td, td.center {
    text-align: center;
    vertical-align: text-top;
  }
  td.pad-left {
    padding-left: 5px;
  }
  tr.right-center td, td.right-center {
    text-align: right;
    padding-right: 50px;
  }
  tr.right td, td.right {
    text-align: right;
  }
  .grey {
    background:#ccc6c6;
  }
</style>
</head>
<body>
  <div id="page-wrap">

  @foreach($facturas as $factura)
   

    <table width="100%">
      <tbody>
        <tr>
          <td width="50%">
           <img height="60" width="60" class="img-responsive " src="storage/logo.png" alt=""> <!-- your logo here -->
           <h3>Reparto a Domicilo La Gaceta <br>
           Ramon Centeno e Hijos</h3>
          </td>
          <td width="50%">
            <h3>Cliente :</h3>
            <strong>Direccion :</strong> {{$factura->cliente->direccion}}<br>
            <strong>N* de Dep. :</strong> {{$factura->cliente->departamento}}<br>
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="center-justified">
              <strong>Periodo Facturado:</strong> {{ $factura->desde->toDateString() }}
              <strong>---</strong> {{ $factura->hasta->toDateString() }}
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  

    <table width="100%" class="outline-table">
      <tbody>
        <tr class="border-bottom border-right grey">
          <td colspan="10"><strong>Producto</strong></td>
        </tr>
        <tr class="border-bottom border-right ">
            <td>Descripcion</td>
            <td>Cantidad</td>
            <td colspan="10">Total</td>
        </tr>
        <tr class="border-bottom border-right">
          <td>Gacetas entregadas</td>
          <td>{{$factura->cantidad}}</td>
          <td colspan="10">${{$factura->total}}</td>
        </tr>
         <tr class="border-bottom border-right">
            <td>.</td>
            <td>.</td>
            <td colspan="10">.</td>
        </tr>
         <tr class="border-bottom border-right">
            <td>.</td>
            <td>.</td>
            <td colspan="10">.</td>
        </tr>
         <tr class="border-bottom border-right">
            <td>.</td>
            <td>.</td>
            <td colspan="10">.</td>
        </tr>

    </table>
<br><br><br><br><br><br><br><br>

    <table width="100%" class="outline-table">
      <tbody>
        <tr >
        <td width="75%" class=" grey"> TOTAL =</td>
          <td width="25%" class=""><strong>$</strong></td>
        </tr>
        <tr class="">
            <td></td>
            <td></td>
        </tr>

    </table>

    <p>&nbsp;</p>
     


    
    <p>&nbsp;</p>
    <table width="100%">
      <tbody>
        <tr>
          <td class="center">
           <hr> Software Diseñado por Sharkestudio  |  http://sharkestudio.com <hr>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
       @endforeach
       
  </div>
</body>
</html>