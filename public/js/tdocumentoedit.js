function llamar_TDocumentoEditar(id_tdocumento){
  $.get( "tdocumento/"+id_tdocumento+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediTDocumento').modal('show');
});

}
$(document).on("submit","#edi_tdocumento",function(e){
	e.preventDefault();
  conteo=$('#edi_tdocumento .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#edi_tdocumento .required:eq('+i+')').val()==''){
         $('#edi_tdocumento .requerido').fadeIn();
         $('#edi_tdocumento .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#edi_tdocumento .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#edi_tdocumento').unbind().submit();
    }


})
