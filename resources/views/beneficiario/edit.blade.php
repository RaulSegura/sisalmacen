{!!Form::model($beneficiarios,['route' => ['beneficiario.update',$beneficiarios->id],'method'=>'PUT','name'=>'edi_beneficiario','id'=>'edi_beneficiario'])!!}
    <div class="box-body">
      <div class="form-group">
       <div class="col-sm-10">
       <div class="row">
           <div class="form-group col-md-3">
                    {!!form::label('CODIGO')!!}
                    {!!form::text('id',null,['id'=>'id','class'=>'form-control','placeholder'=>'Digite Código del Beneficiario'])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-12">
                    {!!form::label('NOMBRE DE BENEFICIARIO')!!}
                    {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Digite Nombre del Beneficiario'])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-12">
                    {!!form::label('DIRECCION')!!}
                    {!!form::text('direccion',null,['id'=>'direccion','class'=>'form-control','placeholder'=>'Digite Direccion del Beneficiario'])!!}
           </div>
        </div>
        <div class="row">
           <div class="form-group col-md-12">
                    {!!form::label('TELEFONO')!!}
                    {!!form::text('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'Digite el Telefono del Beneficiario'])!!}
           </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
                   {!!form::label('DISTRITO')!!}
                   {!!form::text('iddistrito',null,['id'=>'id','class'=>'form-control'])!!}
          </div>
          <div class="form-group col-md-4">
                   {!!form::label('PROVINCIA')!!}
                   {!!form::text('idprovincia',null,['id'=>'id','class'=>'form-control'])!!}
          </div>
          <div class="form-group col-md-4">
                   {!!form::label('REGION')!!}
                   {!!form::text('idregion',null,['id'=>'id','class'=>'form-control'])!!}
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
