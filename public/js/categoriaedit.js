function llamar_CategoriaEditar(id_categoria){
  $.get( "categoria/"+id_categoria+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediCategoria').modal('show');
});

}
