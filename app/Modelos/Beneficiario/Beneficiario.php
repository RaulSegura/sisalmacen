<?php

namespace App\Modelos\Beneficiario;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    //
    protected $table = 'beneficiario';
    protected $primarykey = 'id';

    public $timestamps=false;

      protected $fillable = ['id','nombre','direccion','telefono','iddistrito', 'idprovincia', 'idregion'];
  }
