<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/provincia.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/estado.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/estadoedit.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/categoria.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/categoriaedit.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/unidad.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/unidadedit.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/producto.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/proveedor.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/proveedoredit.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/tdocumento.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/tdocumentoedit.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/configuracion.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/reportes.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/productoedit.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/beneficiario.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/beneficiarioedit.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/region.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/regionedit.js')}}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- page script -->
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- ACORDEON -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
  $( "#accordion" ).accordion({
    collapsible: true
  });
} );
</script>
<!-- PESTAÑAS -->
<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
