@extends('layouts.app')

@section('htmlheader_title')
proveedores
@endsection
@section('main-content')

<ol class="breadcrumb">
  <li><a href="home"><i class="fa fa-home"></i>  Inicio</a></li>
  <li><a href="#"><i class='fa fa-cart-arrow-down'></i> Compras</a></li>
  <li class="active">Proveedor</li>
</ol>



    <section class="content">
        <div class="row">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Proveedor</h3>
                  <p class="navbar-text navbar-right" style="margin-top:1px;">
                    <a onclick="llamar_Proveedor()"><button type="button" id="nuevo" name="nuevo" class="btn btn-danger" style="margin-bottom: 1px; margin-top: 5px;
                    margin-right: 18px; padding: 3px 20px;">Nuevo</button></a>
                  </p>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th><i class='text-blue'>Código</i></th>
                        <th><i class='text-blue'>Nombre</i></th>
                        <th><i class='text-blue'>Dirección</i></th>
                        <th><i class='text-blue'>Teléfono</i></th>
                        <th><i class='text-blue'>Celular</i></th>
                        <th><i class='text-blue'>Email</i></th>
                        <th><i class='text-blue'>Web</i></th>
                        <th><i class='text-blue'>Distrito</i></th>
                        <th><i class='text-blue'>Provincia</i></th>
                        <th><i class='text-blue'>Región</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </thead>

                    <tbody>

                      @foreach ($proveedores as $proveedor)

                      <tr>
                        <td><i class='text-olive'>{{$proveedor->id}}</i></td>
                        <td>{{$proveedor->nombre}}</td>
                        <td>{{$proveedor->direccion}}</td>
                        <td>{{$proveedor->telefono}}</td>
                        <td>{{$proveedor->celular}}</td>
                        <td>{{$proveedor->email}}</td>
                        <td>{{$proveedor->pag_web}}</td>
                        <td>{{$proveedor->nom_distrito}}</td>
                        <td>{{$proveedor->nom_provincia}}</td>
                        <td>{{$proveedor->nom_region}}</td>
                          <td>
                            <a onclick="llamar_ProveedorEditar
                            ({{$proveedor->id}})"><i class='fa fa-edit text-olive'></i></a>
                            &nbsp;&nbsp;
                            <a href="#"><i class='fa fa-trash-o text-red'></i></a>
                          </td>
                     </tr>

                       @endforeach

                    </tbody>
                    <tfoot>
                      <tr>
                        <th><i class='text-blue'>Código</i></th>
                        <th><i class='text-blue'>Nombre</i></th>
                        <th><i class='text-blue'>Dirección</i></th>
                        <th><i class='text-blue'>Teléfono</i></th>
                        <th><i class='text-blue'>Celular</i></th>
                        <th><i class='text-blue'>Email</i></th>
                        <th><i class='text-blue'>Web</i></th>
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
            <div id="addProveedor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                  <h4 class="modal-title" id="myModalLabel">Agregar Proveedor</h4>
                </div>
                <div class="modal-body">
                  @include('proveedor.create')
                </div>

              </div>
              </div>

            </div>
            <div id="ediProveedor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                  <h4 class="modal-title" id="myModalLabel">Modificar Proveedor</h4>
                </div>
                <div class="modal-body" id="form_edit">

                </div>

              </div>
              </div>

            </div>



@endsection
