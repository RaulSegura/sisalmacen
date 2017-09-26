@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')

					<!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
								<a onclick="llamar_Configuracion()"><span class="info-box-icon bg-teal" data-toggle="dropdown"><i class="ion ion-gear-a"></i></span></a>
                <div class="info-box-content">
                  <span class="info-box-text">CONFIGURACION</span>
                  <span class="info-box-number">Empresa</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-teal"><i class="fa fa-building-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">REQUERIMIENTOS</span>
                  <span class="info-box-number">12</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="{{URL::to('beneficiario')}}"><span class="info-box-icon bg-teal"><i class="ion ion-person-stalker"></i></a></span></a>
                <div class="info-box-content">
                  <span class="info-box-text">BENEFICIARIOS</span>
                  <span class="info-box-number"></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">INGRESOS</span>
                  <span class="info-box-number">98</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
						<div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">SALIDAS</span>
                  <span class="info-box-number">62</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
						<div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
								<a onclick="llamar_Reportes()"><span class="info-box-icon bg-olive" data-toggle="dropdown"><i class="ion ion-clipboard"></i></span></a>
								<div class="info-box-content">
                  <span class="info-box-text">REPORTES</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

				<div id="addConfiguracion" class="modal fade">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-body">
				        <a href="{{URL::to('empresa')}}"><p style="color:green">Configuración de los Datos de la Empresa</p></a>
								<a href="{{URL::to('tdocumento')}}"><p style="color:green">Configuración de los Tipos de Documentos</p></a>
				      </div>
				    </div>
				  </div>
				</div>

				<div id="addReportes" class="modal fade">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-body">
								<a href="{{URL::to('getExportar')}}"><p style="color:green">Reporte General de Productos</p></a>
								<a href="{{URL::to('getExportarProvee')}}"><p style="color:green">Reporte General de Proveedores</p></a>
								<a href="{{URL::to('getExportarSalida')}}"><p style="color:green">Reporte General de Salidas</p></a>
								<a href="{{URL::to('getExportarBeneficiario')}}"><p style="color:green">Reporte General de Beneficiario</p></a>
								<a href="{{URL::to('getExportaringreso')}}"><p style="color:green">Reporte General de Ingreso</p></a>
				      </div>
				    </div>
				  </div>
				</div>



@endsection
