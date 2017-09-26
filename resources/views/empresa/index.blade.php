
@extends('layouts.app')

@section('htmlheader_title')
  Home
@endsection

@section('main-content')


        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-4">

              @foreach ($empresas as $empresa)
            <!-- Profile Image -->
              <div class="box box-warning">
                <div class="box-body box-profile">
                  <img class="img-responsive img-circle" src="img/imagenes/1.jpg" alt="user image">
                  <h3 class="profile-username text-center">{{$empresa->siglas}}</h3>
                  <h3 class="profile-username text-center">{{$empresa->nombre}}</h3>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Dirección</b><a class="pull-right">{{$empresa->direccion}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>RUC</b><a class="pull-right">{{$empresa->ruc}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Número de Trabajadores</b> <a class="pull-right">{{$empresa->numtrabajadores}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Teléfono</b> <a class="pull-right">{{$empresa->telefono1}} / {{$empresa->telefono2}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Celular</b> <a class="pull-right">{{$empresa->celular1}} / {{$empresa->celular2}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Página Web</b> <a class="pull-right">{{$empresa->pagweb}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Correo</b> <a class="pull-right">{{$empresa->email}}</a>
                    </li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              @endforeach
            </div><!-- /.col -->

            <div class="col-md-8">
              <div class="nav-tabs-custom tab-warning">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Resumen</a></li>
                  <li><a href="#settings" data-toggle="tab">Ajustes</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <p class="text-muted">{{$empresa->descripcion}}</p>
                    </div><!-- /.post -->
                  </div><!-- /.tab-pane -->


                  <div class="tab-pane" id="settings">

                    {!!Form::model($empresa,['route' => ['empresa.update',$empresa->id],'method'=>'PUT','name'=>'edi_empresa','id'=>'edi_empresa'])!!}
                      <form class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                           <div class="col-sm-10">
                           <div class="row">
                               <div class="form-group col-md-12">
                                        {!!form::label('NOMBRE')!!}
                                        {!!form::text('nombre',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código para la Nueva Categoría'])!!}
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                        {!!form::label('DIRECCION')!!}
                                        {!!form::text('direccion',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                               </div>
                               <div class="form-group col-md-6">
                                        {!!form::label('RUC')!!}
                                        {!!form::text('ruc',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código para la Nueva Categoría'])!!}
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                        {!!form::label('DISTRITO')!!}
                                        {!!form::text('iddistrito',null,['id'=>'distrito','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                               </div>
                               <div class="form-group col-md-6">
                                        {!!form::label('PROVINCIA')!!}
                                        {!!form::text('idprovincia',null,['id'=>'provincia','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                        {!!form::label('REGION')!!}
                                        {!!form::text('idregion',null,['id'=>'region','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                        {!!form::label('NUMERO DE TRABAJADORES')!!}
                                        {!!form::text('numtrabajadores',null,['id'=>'numtrabajadores','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                               </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                         {!!form::label('DESCRIPCION')!!}
                                         {!!form::textarea('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Digite Código para la Nueva Categoría', 'rows'=>'3'])!!}
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-md-6">
                                         {!!form::label('TELEFONO 1')!!}
                                         {!!form::text('telefono1',null,['id'=>'telefono1','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                                </div>
                                <div class="form-group col-md-6">
                                         {!!form::label('TELEFONO 2')!!}
                                         {!!form::text('telefono2',null,['id'=>'telefono2','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                                </div>
                             </div>
                             <div class="row">
                                 <div class="form-group col-md-6">
                                          {!!form::label('CELULAR 1')!!}
                                          {!!form::text('celular1',null,['id'=>'celular1','class'=>'form-control','placeholder'=>'Digite Código para la Nueva Categoría'])!!}
                                 </div>
                                 <div class="form-group col-md-6">
                                          {!!form::label('CELULAR 2')!!}
                                          {!!form::text('celular2',null,['id'=>'celular2','class'=>'form-control','placeholder'=>'Digite Código para la Nueva Categoría'])!!}
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-md-8">
                                          {!!form::label('PAGINA WEB')!!}
                                          {!!form::text('pagweb',null,['id'=>'pagweb','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-md-8">
                                          {!!form::label('EMAIL')!!}
                                          {!!form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                                 </div>
                              </div>

                              <div class="box-footer">
                                   {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning pull-right'])!!}


                              </div><!-- /.box-footer -->


                           </div><!-- /.box-body -->
                          </div><!-- /.box -->
                        </div>
                      </form>
                    {!!Form::close()!!}


                  </div><!-- /.tab-pane -->

                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->




@endsection
