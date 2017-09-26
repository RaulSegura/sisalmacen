function llamar_UnidadEditar(id_unidad){
  $.get( "unidad/"+id_unidad+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediUnidad').modal('show');
});

}
