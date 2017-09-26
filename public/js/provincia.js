function llamar_provincia(){
  $('#addProvincia').modal('show');
}
$(document).on("submit","#add_provincia",function(e){
	e.preventDefault();
  conteo=$('#add_provincia .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#add_provincia .required:eq('+i+')').val()==''){
        $('#add_provincia .requerido').fadeIn();
        $('#add_provincia .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#add_provincia .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#add_provincia').unbind().submit();
    }


})
