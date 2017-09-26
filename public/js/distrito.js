function llamar_distrito(){
  $('#addDistrito').modal('show');
}
$(document).on("submit","#add_distrito",function(e){
	e.preventDefault();
  conteo=$('#add_distrito .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#add_distrito .required:eq('+i+')').val()==''){
         $('#add_distrito .requerido').fadeIn();
         $('#add_distrito .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#add_distrito .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#add_distrito').unbind().submit();
    }


})
