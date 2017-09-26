@extends('layouts.app')

@section('htmlheader_title')
Productos
@endsection
@section('main-content')

<ol class="breadcrumb">
  <li><a href="home"><i class="fa fa-home"></i>  Inicio</a></li>
  <li><a href="#"><i class='fa fa-cart-arrow-down'></i> Almacén</a></li>
  <li class="active">Productos</li>
</ol>



    <section class="content">
        <div class="row">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Productos</h3>
                  <p class="navbar-text navbar-right" style="margin-top:1px;">
                    <a onclick="llamar_producto()"><button type="button" id="nuevo" name="nuevo" class="btn btn-danger btn-flat" style="margin-bottom: 1px; margin-top: 5px;
                    margin-right: 18px; padding: 3px 20px;">Nuevo</button></a>
                  </p>

                    <div class="btn-group navbar-text navbar-right"  style="margin-bottom: 1px; margin-top: 5px; margin-right: 18px; padding: 3px 20px;">
                      <button type="button" class="btn btn-warning btn-flat" style="padding: 3px 20px;">Exportar</button>
                      <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown" style="margin-right: 8px; padding: 3px 10px;">
                          <span class="caret"></span>
                          <span class="sr-only">Toggole Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu" id="export-menu" style="background-color: #EEEEEE;">
                          <li id="export-excel"><a href="{{URL::to('getExportar')}}">Exportar a Excel</a></li>
                          <li class="divider"></li>
                          <li><a href="{{URL::to('getExportarpdf')}}">Exportar a PDF</a></li>
                      </ul>
                    </div><!-- /.box-header -->
                </div>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th><i class='text-blue'>Código</i></th>
                        <th><i class='text-blue'>Nombre de Producto</i></th>
                        <th><i class='text-blue'>Descripcion</i></th>
                        <th><i class='text-blue'>Estado</i></th>
                        <th><i class='text-blue'>Categoria</i></th>
                        <th><i class='text-blue'>Stock</i></th>
                        <th><i class='text-blue'>Unidad</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($productos as $producto)

                      <tr>
                        <td><i class='text-olive'>{{$producto->id}}</i></td>
                        <td>{{$producto->nom_producto}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->estado}}</td>
                        <td>{{$producto->categoria}}</td>
                        <td>{{$producto->stock_actual}}</td>
                        <td>{{$producto->unidad}}</td>
                          <td>
                            <a href="#"><i class='fa fa-edit text-olive'></i></a>
                            &nbsp;&nbsp;
                            <a href="{{URL::to('producto.show')}}"><i class='fa fa-eye text-info'></i></a>
                            &nbsp;&nbsp;
                            <a href="#"><i class='fa fa-trash-o text-red'></i></a>
                          </td>
                     </tr>

                       @endforeach

                    </tbody>
                    <tfoot>
                      <tr>
                        <th class="col-sm-1"><i class='text-blue'>Código</i></th>
                        <th class="col-sm-2"><i class='text-blue'>Nombre de Producto</i></th>
                        <th class="col-sm-4"><i class='text-blue'>Descripcion</i></th>
                        <th class="col-sm-1"><i class='text-blue'>Estado</i></th>
                        <th class="col-sm-1"><i class='text-blue'>Categoria</i></th>
                        <th class="col-sm-1"><i class='text-blue'>Stock</i></th>
                        <th class="col-sm-1"><i class='text-blue'>Unidad</i></th>
                        <th class="col-sm-3"><i class='text-blue'>Acción</i></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div>
          </section>
    <!-- jQuery 2.1.4 -->
          <div id="addProducto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                <h4 class="modal-title" id="myModalLabel">Agregar producto</h4>
              </div>
              <div class="modal-body">
                @include('productos.create')
              </div>

            </div>
            </div>

          </div>



@endsection
