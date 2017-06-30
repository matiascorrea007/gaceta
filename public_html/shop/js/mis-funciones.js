function AgregarItem(id) {

    //hace referencia a la ruta , y le mandos los parametros
  $.get('web-addtocart/'+ id , function(data){
     console.log(data);
    $('.valor_total').text(''+data[0]+'');
    $('#cantidad_total').text(''+data[1]+'');
    
    toastr.success('Producto Agregado al Carrito');


});
  
}




function DeleteItem(id) {

    var id = id ;

     var tablaDatos = $("#datos");
    $("#datos").empty();

    console.log(id);
    //hace referencia a la ruta , y le mandos los parametros
    $.get('web-delete/'+ id , function(data){
      console.log(data);
      $('#valor_total').text(''+data[0]+'');
      $('.valor_total').text('Total = $'+data[0]+'');
    $('#cantidad_total').text(''+data[1]+'');
     toastr.success('Producto Eliminado del Carrito');
  //me lo muesta en el input que tenga id mostrar
$(data[2]).each(function(key,value){
  console.log(data);
          tablaDatos.append("<tr><td><img src='"+String(data[2][key].imagen1)+"' alt='' style='height:50px'></td><td>"+data[2][key].descripcion+"</td><td>"+data[2][key].precioventa+"</td><td><input type='number' min='1' max='100' value='"+data[2][key].quantity+"' id='product_"+data[2][key].id+"'><a href='#' class='btn btn-warning' data-href='' data-id ='"+data[2][key].id+"' onclick='ActualizarItem("+data[2][key].id+");'><i class='fa fa-refresh'></i></a></td><td>"+data[2][key].precioventa*data[2][key].quantity+"</td><td><button onclick='DeleteItem("+data[2][key].id+");'  class='btn btn-danger' type='button' ><i class='fa fa-remove'></i></button></td></tr>");
      });
  

  

});
}






function ActualizarItem(id) {


    var id = id ;
    var cantidad = parseInt($("#product_"+id).val());

    var tablaDatos = $("#datos");
    $("#datos").empty();


    console.log(cantidad);
    //hace referencia a la ruta , y le mandos los parametros
  $.get('web-update/'+ id + '/' + cantidad, function(data){
 console.log(data);
    $('#valor_total').text(''+data[0]+'');
    $('.valor_total').text('Total = $'+data[0]+'');
    $('#cantidad_total').text(''+data[1]+'');
    toastr.success('Cantidad Modificada');

    $(data).each(function(key,value){
        tablaDatos.append("<tr><td><img src='"+String(data[2][key].imagen1)+"' alt='' style='height:50px'></td><td>"+data[2][key].descripcion+"</td><td>"+data[2][key].precioventa+"</td><td><input type='number' min='1' max='100' value='"+data[2][key].quantity+"' id='product_"+data[2][key].id+"'><a href='#' class='btn btn-warning' data-href='' data-id ='"+data[2][key].id+"' onclick='ActualizarItem("+data[2][key].id+");'><i class='fa fa-refresh'></i></a></td><td>"+data[2][key].precioventa*data[2][key].quantity+"</td><td><button onclick='DeleteItem("+data[2][key].id+");'  class='btn btn-danger' type='button' ><i class='fa fa-remove'></i></button></td></tr>");
      });

    
});

}






