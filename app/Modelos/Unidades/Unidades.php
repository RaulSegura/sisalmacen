<?php

namespace App\Modelos\Unidades;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    //
    protected $table = 'unidad_medida';
    protected $primarykey = 'id';
    public $timestamps=false;

    protected $fillable = ['id','nom_unidad','prefijo'];
}
