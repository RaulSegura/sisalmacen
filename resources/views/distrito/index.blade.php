@extends('layouts.app')

@section('htmlheader_title')
Distritos
@endsection
@section('main-content')

<ol class="breadcrumb">
  <li><a href="home"><i class="fa fa-home"></i>  Inicio</a></li>
  <li><a href="#"><i class='fa fa-cart-arrow-down'></i> Mantenimiento</a></li>
  <li class="active">Distritos</li>
</ol>



    <section class="content">
        <div class="row">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Distritos</h3>
                  <p class="navbar-text navbar-right" style="margin-top:1px;">
                    <a href="regiones"><button type="button" id="nuevo" name="nuevo" class="btn btn-danger" style="margin-bottom: 1px; margin-top: 5px;
                    margin-right: 18px; padding: 3px 20px;">Nuevo</button></a>
                  </p>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th><i class='text-blue'>Código</i></th>
                        <th><i class='text-blue'>Nombre de Distrito</i></th>
                        <th><i class='text-blue'>Provincia</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($distritos as $distrito)

                      <tr>
                        <td><i class='text-olive'>{{$distrito->id}}</i></td>
                        <td>{{$distrito->nom_distrito}}</td>
                        <td>{{$distrito->nom_provincia}}</td>
                          <td>
                            <a href="{{route('distrito.edit', $distrito->id)}}"><i class='fa fa-edit text-blue'></i></a>
                            &nbsp;&nbsp;
                            <a href="#"><i class='fa fa-trash-o text-red'></i></a>
                          </td>
                     </tr>

                       @endforeach

                    </tbody>
                    <tfoot>
                      <tr>
                        <th><i class='text-blue'>Código</i></th>
                        <th><i class='text-blue'>Nombre de Distrito</i></th>
                        <th><i class='text-blue'>Provincia</i></th>
                        <th><i class='text-blue'>Acción</i></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div>
          </section>
    <!-- jQuery 2.1.4 -->



@endsection
