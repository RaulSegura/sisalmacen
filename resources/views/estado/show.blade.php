@extends('layouts.app')

@section('htmlheader_title')
Estado
@endsection
@section('main-content')

<ol class="breadcrumb">
  <li><a href="home"><i class="fa fa-home"></i>  Inicio</a></li>
  <li><a href="#"><i class='fa fa-cart-arrow-down'></i> Almacén</a></li>
  <li class="active">Estado</li>
</ol>

   <div class="row">
     <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
            Eliminar
          </div>
         <div class="panel-body">

            {!!Form::open(['route'=>['estado.destroy',$estados->id],'method'=>'DELETE'])!!}

             <div class="form-group">
               <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO:</label>
             </div>
             <div class="form-group">
              {!!form::label('CODIGO')!!}
               {!!$estados->id !!}
             </div>
             <div class="form-group">
               {!!form::label('NOMBRE')!!}
               {!!$estados->nombre_estado !!}
             </div>

                 {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}

                <button type="button" id= 'cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10" >Cancelar</button>

          {!!Form::close()!!}





         </div>
       </div>

     </div>
   </div>

<script>
  $("#cancelar").click(function(event)
  {
      document.location.href = "{{ route('estado.index')}}";
  });
</script>


@endsection
