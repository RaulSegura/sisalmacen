function llamar_TDocumento(){
  $('#addTDocumento').modal('show');
}
$(document).on("submit","#add_tdocumento",function(e){
	e.preventDefault();
  conteo=$('#add_tdocumento .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#add_tdocumento .required:eq('+i+')').val()==''){
         $('#add_tdocumento .requerido').fadeIn();
         $('#add_tdocumento .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#add_tdocumento .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#add_tdocumento').unbind().submit();
    }


})
