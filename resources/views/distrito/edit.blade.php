{!!Form::open(['route' => 'distrito.store' ,'method'=>'POST','name'=>'add_distrito','id'=>'add_distrito'])!!}
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
               <div class="col-sm-10">
               <div class="row">
          	       <div class="form-group col-md-6">
                            {!!form::label('CODIGO')!!}
                            {!!form::text('id',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código para la Nueva Categoría'])!!}
                   </div>
                </div>
                <div class="row">
                   <div class="form-group col-md-6">
                            {!!form::label('NOMBRE DE DISTRITO')!!}
                            {!!form::text('nom_distrito',null,['id'=>'nom_distrito','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                   </div>
                </div>
                <div class="row">
                   <div class="form-group col-md-6">
                            {!!form::label('PROVINCIA')!!}
                            {!!form::text('nom_provincia',null,['id'=>'nom_provincia','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                   </div>
                </div>

                  <div class="box-footer">
                       <button type="submit" class="btn btn-default">Cancelar</button>
                       <!--<button type="submit" class="btn btn-default"><a href="{{url('region')}}">Provincia</a></button>-->
                       <!--<button type="submit" class="btn btn-default"><a href="{{url('provincia')}}">Listar</a></button>-->
                       {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning pull-right'])!!}


                  </div><!-- /.box-footer -->


               </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </form>
{!!Form::close()!!}
