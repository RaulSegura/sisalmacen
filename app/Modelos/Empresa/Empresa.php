<?php

namespace App\Modelos\Empresa;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'empresa';
    protected $primarykey = 'id';
    public $timestamps=false;

    protected $fillable = ['id','ruc', 'siglas', 'nombre', 'direccion', 'descripcion', 'iddistrito', 'idprovincia', 'idregion', 'numtrabajadores',
                           'telefono1', 'telefono2', 'celular1', 'celular2', 'pagweb', 'email', 'logo'];
}
