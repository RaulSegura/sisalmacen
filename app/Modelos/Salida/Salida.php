<?php

namespace App\Modelos\Salida;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    //
    protected $table = 'salida';
    protected $primarykey = 'id';

    public $timestamps=false;

      protected $fillable = ['id','Id_requerimiento','observacion','tipo_comprobante','num_comprobante', 'fecha', 'Id_beneficiario'];
}
