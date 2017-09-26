@extends('layouts.app')

@section('htmlheader_title')
Beneficiarios
@endsection
@section('main-content')

<ol class="breadcrumb">
  <li><a href="home"><i class="fa fa-home"></i>  Inicio</a></li>
  <li><a href="#"><i class='fa fa-cart-arrow-down'></i> Almacén</a></li>
  <li class="active">Beneficiarios</li>
</ol>



    <section class="content">
        <div class="row">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Beneficiarios</h3>
                  <p class="navbar-text navbar-right" style="margin-top:1px;">
                    <a onclick="llamar_Beneficiario()"><button type="button" id="nuevo" name="nuevo" class="btn btn-danger" style="margin-bottom: 1px; margin-top: 5px;
                    margin-right: 18px; padding: 3px 20px;">Nuevo</button></a>
                  </p>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th><i class='text-blue'>DNI</i></th>
                        <th><i class='text-blue'>Nombre de Beneficiario</i></th>
                        <th><i class='text-blue'>Dirección</i></th>
                        <th><i class='text-blue'>Teléfono</i></th>
                        <th><i class='text-blue'>Distrito</i></th>
                        <th><i class='text-blue'>Provincia</i></th>
                        <th><i class='text-blue'>Región</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($beneficiarios as $beneficiario)

                      <tr>
                        <td><i class='text-olive'>{{$beneficiario->id}}</i></td>
                        <td>{{$beneficiario->nombre}}</td>
                        <td>{{$beneficiario->direccion}}</td>
                        <td>{{$beneficiario->telefono}}</td>
                        <td>{{$beneficiario->nom_distrito}}</td>
                        <td>{{$beneficiario->nom_provincia}}</td>
                        <td>{{$beneficiario->nom_region}}</td>
                          <td>
                            <a onclick="llamar_BeneficiarioEditar({{$beneficiario->id}})"><i class='fa fa-edit text-olive'></i></a>
                            &nbsp; &nbsp;
                            <a href="#"><i class='fa fa-trash-o text-red'></i></a>
                            &nbsp;&nbsp;
                            <a href="detallebeneficiarios"><i class='fa fa-eye text-olive'></i></a>
                          </td>
                     </tr>

                       @endforeach

                    </tbody>
                    <tfoot>
                      <tr>
                        <th><i class='text-blue'>DNI</i></th>
                        <th><i class='text-blue'>Nombre de Beneficiario</i></th>
                        <th><i class='text-blue'>Dirección</i></th>
                        <th><i class='text-blue'>Teléfono</i></th>
                        <th><i class='text-blue'>Distrito</i></th>
                        <th><i class='text-blue'>Provincia</i></th>
                        <th><i class='text-blue'>Región</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div>
          </section>
    <!-- jQuery 2.1.4 -->
          <div id="addBeneficiario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                <h4 class="modal-title" id="myModalLabel">Agregar Beneficiario</h4>
              </div>
              <div class="modal-body">
                @include('beneficiario.create')
              </div>
            </div>
           </div>
          </div>
          <div id="ediBeneficiario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                <h4 class="modal-title" id="myModalLabel">Modificar Estados</h4>
              </div>
              <div class="modal-body" id="form_edit">

              </div>

            </div>
            </div>

          </div>




@endsection
