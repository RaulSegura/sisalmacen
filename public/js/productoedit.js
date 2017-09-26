function llamar_ProductoEditar(id_producto){
  $.get( "producto/"+id_producto+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediproducto').modal('show');
});

}
