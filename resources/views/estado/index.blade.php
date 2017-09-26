@extends('layouts.app')

@section('htmlheader_title')
Estado
@endsection
@section('main-content')

<ol class="breadcrumb">
  <li><a href="home"><i class="fa fa-home"></i>  Inicio</a></li>
  <li><a href="#"><i class='fa fa-cart-arrow-down'></i> Almacén</a></li>
  <li class="active">Estado</li>
</ol>



    <section class="content">
        <div class="row">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Estados de prueba</h3>
                  <p class="navbar-text navbar-right" style="margin-top:1px;">
                    <a onclick="llamar_estado()"><button type="button" id="nuevo" name="nuevo" class="btn btn-danger btn-flat" style="margin-bottom: 1px; margin-top: 5px;
                    margin-right: 18px; padding: 3px 20px;">Nuevo</button></a>
                  </p>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th><i class='text-blue'>Código</i></th>
                        <th><i class='text-blue'>Nombre del Estado</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($estados as $estado)

                      <tr>
                        <td><i class='text-olive'>{{$estado->id}}</i></td>
                        <td>{{$estado->nombre_estado}}</td>
                        <td>
                            <a onclick="llamar_EstadoEditar({{$estado->id}})"><i class='fa fa-edit text-olive'></i></a>
                            &nbsp; &nbsp;
                           <a href="{{route('estado.show',$estado->id)}}"><i class='fa fa-trash-o text-red'></i></a>
                        </td>
                     </tr>

                       @endforeach

                    </tbody>
                    <tfoot>
                      <tr>
                        <th><i class='text-blue'>Código</i></th>
                        <th><i class='text-blue'>Nombre de Estado</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div>
          </section>
    <!-- jQuery 2.1.4 -->
            <div id="addEstado" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                  <h4 class="modal-title" id="myModalLabel">Agregar Estado</h4>
                </div>
                <div class="modal-body">
                  @include('estado.create')
                </div>
              </div>
              </div>
            </div>

            <div id="ediEstado" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
