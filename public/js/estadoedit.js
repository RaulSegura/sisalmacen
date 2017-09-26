function llamar_EstadoEditar(id_estado){
  $.get( "estado/"+id_estado+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediEstado').modal('show');
});

}
