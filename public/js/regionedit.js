function llamar_regioneditar(id_region){
  $.get( "region/"+id_region+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediRegion').modal('show');
});

}
