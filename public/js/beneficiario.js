function llamar_Beneficiario(){
  $('#addBeneficiario').modal('show');
}
$(document).on("submit","#add_beneficiario",function(e){
	e.preventDefault();
  conteo=$('#add_beneficiario .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#add_beneficiario .required:eq('+i+')').val()==''){
         $('#add_beneficiario .requerido').fadeIn();
         $('#add_beneficiario .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#add_beneficiario .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#add_beneficiario').unbind().submit();
    }


})
