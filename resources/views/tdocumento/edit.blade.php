{!!Form::model($tdocumentos,['route' => ['tdocumento.update',$tdocumentos->id],'method'=>'PUT','name'=>'edi_tdocumento','id'=>'edi_tdocumento'])!!}
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
       <div class="col-sm-10">
       <div class="row">
           <div class="form-group col-md-6">
                    {!!form::label('TIPO DE DOCUMENTO')!!}
                    {!!form::text('id',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código para el nuevo Tipo de Documento'])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-6">
                    {!!form::label('NOMBRE DEL TIPO DE DOCUMENTO')!!}
                    {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Digite Nombre para el nuevo Tipo de Documento'])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-6">
                    {!!form::label('OPERACION')!!}
                    {!!form::text('operacion',null,['id'=>'operacion','class'=>'form-control','placeholder'=>'Operación'])!!}
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
