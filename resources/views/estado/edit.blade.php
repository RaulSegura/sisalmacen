{!!Form::model($estados,['route' => ['estado.update',$estados->id],'method'=>'PUT','name'=>'edi_estado','id'=>'edi_estado'])!!}
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
                    {!!form::label('NOMBRE DE ESTADO')!!}
                    {!!form::text('nombre_estado',null,['id'=>'nombre_estado','class'=>'form-control','placeholder'=>'Digite Nombre para el nuevo Estado'])!!}
           </div>
        </div>
          <div class="box-footer">
               <button type="submit" class="btn btn-success btn-flat">Cancelar</button>
               {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning pull-right btn-flat'])!!}
         </div><!-- /.box-footer -->
       </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </form>
{!!Form::close()!!}
