function llamar_Proveedor(){
  $('#addProveedor').modal('show');
}
$(document).on("submit","#add_proveedor",function(e){
	e.preventDefault();
  conteo=$('#add_proveedor .required').length;
    variable=0;
    for(i=0;i<conteo;i++){
      if($('#add_proveedor .required:eq('+i+')').val()==''){
         $('#add_proveedor .requerido').fadeIn();
         $('#add_proveedor .required:eq('+i+')').css({'border-color' : 'red'})
        variable=variable+1;
      }else{
        $('#add_proveedor .required:eq('+i+')').css({'border-color' : '#D6D6D6'})
      }
    }
    if(variable>0){
      alert('debes llenar los campos en rojo')

    }
    else {
      $('#add_proveedor').unbind().submit();
    }


})
