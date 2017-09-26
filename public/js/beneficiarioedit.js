function llamar_BeneficiarioEditar(id_beneficiario){
  $.get( "beneficiario/"+id_beneficiario+'/edit', function( data ) {
    $('#form_edit').html(data);
    $('#ediBeneficiario').modal('show');
});

}
$(document).on("submit","#edi_beneficiario",function(e){
	e.preventDefault();
  conteo=$('#edi_beneficiario .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#edi_beneficiario .required:eq('+i+')').val()==''){
         $('#edi_beneficiario .requerido').fadeIn();
         $('#edi_beneficiario .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#edi_beneficiario .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#edi_beneficiario').unbind().submit();
    }


})
