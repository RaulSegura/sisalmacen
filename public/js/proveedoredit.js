function llamar_ProveedorEditar(id_proveedor){
  $.get( "proveedor/"+id_proveedor+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediProveedor').modal('show');
});

}
$(document).on("submit","#edi_proveedor",function(e){
	e.preventDefault();
  conteo=$('#edi_proveedor .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#edi_proveedor .required:eq('+i+')').val()==''){
         $('#edi_proveedor .requerido').fadeIn();
         $('#edi_proveedor .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#edi_proveedor .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#edi_proveedor').unbind().submit();
    }


})
