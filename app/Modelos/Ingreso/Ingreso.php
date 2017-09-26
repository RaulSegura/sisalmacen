<?php

namespace App\Modelos\Ingreso;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    //
    protected $table = 'ingreso';
    protected $primarykey = 'id';

    public $timestamps=false;

      protected $fillable = ['id','id_user','Id_proveedor','Id_tipo_documento','id_estado'];
}
