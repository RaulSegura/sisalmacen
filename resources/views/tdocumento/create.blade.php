{!!Form::open(['route' => 'tdocumento.store' ,'method'=>'POST','name'=>'add_tdocumento','id'=>'add_tdocumento'])!!}
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
               <div class="col-sm-10">
               <div class="row">
          	       <div class="form-group col-md-6">
                            {!!form::label('TIPO DOCUMENTO')!!}
                            {!!form::text('id',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código para el nuevo Tipo de Documento'])!!}
                   </div>
                </div>
                <div class="row">
                   <div class="form-group col-md-6">
                            {!!form::label('NOMBRE DE DOCUMENTO')!!}
                            {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Digite Nombre para el Nuevo Tipo de Documento'])!!}
                   </div>
                </div>
                <div class="row">
                   <div class="form-group col-md-6">
                            {!!form::label('OPERACION')!!}
                            {!!form::text('operacion',null,['id'=>'operacion','class'=>'form-control','placeholder'=>'Digite la Operacion para el Nuevo Tipo de Documento'])!!}
                   </div>
                </div>

                  <div class="box-footer">
                       <button type="button" class="btn btn-success btn-flat" data-dismiss="modal">Cancelar</button>
                       {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-flat pull-right'])!!}

                  </div><!-- /.box-footer -->
               </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </form>
{!!Form::close()!!}
