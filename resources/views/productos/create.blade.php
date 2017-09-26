{!!Form::open(['route' => 'producto.store' ,'method'=>'POST','name'=>'add_producto','id'=>'add_producto'])!!}
<form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
       <div class="col-sm-10">
       <div class="row">
           <div class="form-group col-md-3">
                    {!!form::label('CODIGO')!!}
                    {!!form::text('id',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código de Productoo'])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-12">
                    {!!form::label('NOMBRE DE PRODUCTO')!!}
                    {!!form::text('nom_producto',null,['id'=>'nom_producto','class'=>'form-control','placeholder'=>'Digite Nombre del Producto'])!!}
           </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
                   {!!form::label('CATEGORIA')!!}
                   {!!form::select('id',$catego,null,['id'=>'id','class'=>'form-control'])!!}
          </div>
          <div class="form-group col-md-4">
                   {!!form::label('UNIDAD DE MEDIDA')!!}
                   {!!form::select('id',$UniMed,null,['id'=>'id','class'=>'form-control'])!!}
          </div>
           <div class="form-group col-md-4">
                    {!!form::label('ESTADO')!!}
                    {!!form::text('estado',null,['id'=>'estado','class'=>'form-control','placeholder'=>'Digite el Estado del Producto'])!!}
           </div>
        </div>
        <div>
           <div class="form-group">
                    {!!form::label('DESCRIPCION')!!}
                    {!!form::textarea('descripcion',null,['id'=>'descripcion','class'=>'form-control','rows'=>'3','placeholder'=>'Digite La Descripción para el Producto'])!!}
           </div>
        </div>
          <div class="box-footer">
               <button type="submit" class="btn btn-default">Cancelar</button>
               <!--<button type="submit" class="btn btn-default"><a href="{{url('region')}}">producto</a></button>-->
               <!--<button type="submit" class="btn btn-default"><a href="{{url('producto')}}">Listar</a></button>-->
               {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning pull-right'])!!}


          </div><!-- /.box-footer -->


       </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </form>
{!!Form::close()!!}
