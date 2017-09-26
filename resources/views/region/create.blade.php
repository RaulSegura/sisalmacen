{!!Form::open(['route' => 'region.store' ,'method'=>'POST'])!!}
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
       <div class="col-sm-10">
       <div class="row">
           <div class="form-group col-md-6">
                    {!!form::label('CODIGO')!!}
                    {!!form::text('id',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código de la Región'])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-6">
                    {!!form::label('NOMBRE DE REGION')!!}
                    {!!form::text('nom_region',null,['id'=>'nom_region','class'=>'form-control','placeholder'=>'Digite el Nombre de la Región'])!!}
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
