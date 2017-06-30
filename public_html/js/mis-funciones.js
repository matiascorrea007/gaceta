function ModalEditarTransporte(id) {
    var token = $("#token").val();
    
    //hace referencia a la ruta , y le mandos los parametros
  $.get('transporte-edit/'+ id , function(data){
  //me lo muesta en el input que tenga id mostrar

  
    $("#transp_descripcion").val(data.descripcion);
    $("#transp_direccion").val(data.direccion);
    $("#transp_telefono").val(data.telefono);

    $("#transp_id").val(data.id);

});
  
}






function ModalEditarPost(id) {
    var token = $("#token").val();
    
    //hace referencia a la ruta , y le mandos los parametros
  $.get('post-edit/'+ id , function(data){
  //me lo muesta en el input que tenga id mostrar
console.log(data);
  
    $(".post_titulo").val(data.titulo);
    $(".post_descripcioncorta").val(data.descripcioncorta);
    $(".post_descripcionlarga").val(data.descripcionlarga);
    $(".post_id").val(data.id);

});
  
}

function ModalDeletePost(id) {
    var token = $("#token").val();
    $(".post_id").val(id);
}