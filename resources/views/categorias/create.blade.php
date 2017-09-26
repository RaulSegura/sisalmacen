{!!Form::open(['route' => 'categoria.store' ,'method'=>'POST','name'=>'add_categoria','id'=>'add_categoria'])!!}
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
               <div class="col-sm-10">
               <div class="row">
          	       <div class="form-group col-md-6">
                            {!!form::label('CODIGO')!!}
                            {!!form::text('id',null,['id'=>'id','class'=>'form-control','readonly','placeholder'=>'Digite Código para el nuevo Estado'],['disable' => true])!!}
                   </div>
                </div>
                <div class="row">
                   <div class="form-group col-md-6">
                            {!!form::label('NOMBRE DE CATEGORIA')!!}
                            {!!form::text('nom_categoria',null,['id'=>'nom_categoria','class'=>'form-control','placeholder'=>'Digite Nombre para la Nueva Categoría'])!!}
                   </div>
                </div>

                  <div class="box-footer">
                       <button type="submit" class="btn btn-success btn-flat">Cancelar</button>
                       <!--<button type="submit" class="btn btn-default"><a href="{{url('region')}}">Provincia</a></button>-->
                       <!--<button type="submit" class="btn btn-default"><a href="{{url('provincia')}}">Listar</a></button>-->
                       {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning pull-right btn-flat'])!!}


                  </div><!-- /.box-footer -->


               </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </form>
{!!Form::close()!!}
