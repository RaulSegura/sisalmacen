<?php

namespace App\Modelos\Proveedor;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  protected $table = 'proveedor';
  protected $primarykey = 'id';

  public $timestamps=false;

  protected $fillable = ['id','nombre','direccion','telefono','celular','email','pag_web','iddistrito', 'idprovincia', 'idregion'];
}
