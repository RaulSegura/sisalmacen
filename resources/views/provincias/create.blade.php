
{!!Form::open(['route' => 'provincia.store' ,'method'=>'POST','name'=>'add_provincia','id'=>'add_provincia'])!!}
 <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
       <div class="col-sm-10">
       <div class="row">

	           <div class="form-group">
                 {!!form::label('REGION')!!}
                 {!!form::select('idregion',$regio,null,['id'=>'idregion','class'=>'form-control required'])!!}
             </div>
             <div class="form-group">
                 {!!form::label('CODIGO')!!}
                 {!!form::text('id',null,['id'=>'id','class'=>'form-control required','placeholder'=>'Digite Código de Provincia'])!!}
             </div>
             <div class="form-group">
                 {!!form::label('NOMBRE DE PROVINCIA')!!}
                 {!!form::text('nom_provincia',null,['id'=>'nom_provincia','class'=>'form-control required','placeholder'=>'Digite Nombre de la Provincia'])!!}
                 <div class="box-footer">
                      <button type="submit" class="btn btn-default">Cancelar</button>
                      <!--<button type="submit" class="btn btn-default"><a href="{{url('region')}}">producto</a></button>-->
                      <!--<button type="submit" class="btn btn-default"><a href="{{url('producto')}}">Listar</a></button>-->
                      {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning pull-right'])!!}


                 </div><!-- /.box-footer -->
        </div>


     </div>
   </div>
   </form>
  {!!Form::close()!!}
