{!!Form::open(['route' => 'unidad.store' ,'method'=>'POST','name'=>'add_unidad','id'=>'add_unidad'])!!}
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
       <div class="col-sm-10">
       <div class="row">
           <div class="form-group col-md-6">
                    {!!form::label('CODIGO')!!}
                    {!!form::text('id',null,['id'=>'id','class'=>'form-control','readonly','placeholder'=>'Digite Código de Nueva Unidad de Medida'],['disable'=>true])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-6">
                    {!!form::label('NOMBRE DE UNIDAD')!!}
                    {!!form::text('nom_unidad',null,['id'=>'nom_unidad','class'=>'form-control','placeholder'=>'Digite Nombre de la Nueva Unidad de Medida'])!!}
           </div>
           <div class="form-group col-md-6">
                    {!!form::label('PREFIJO DE UNIDAD')!!}
                    {!!form::text('prefijo',null,['id'=>'prefijo','class'=>'form-control','placeholder'=>'Digite el Prefijo de la Nueva Unidad de Medida'])!!}
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
