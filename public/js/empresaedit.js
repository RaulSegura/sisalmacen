function llamar_EmpresaEditar(id_empresa){
  $.get( "empresa/"+id_empresa+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediempresa').modal('show');
});

}
$(document).on("submit","#edi_empresa",function(e){
	e.preventDefault();
  conteo=$('#edi_empresa .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#edi_empresa .required:eq('+i+')').val()==''){
         $('#edi_empresa .requerido').fadeIn();
         $('#edi_empresa .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#edi_empresa .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#edi_empresa').unbind().submit();
    }


})
