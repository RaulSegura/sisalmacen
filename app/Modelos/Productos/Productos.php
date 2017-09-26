<?php

namespace App\Modelos\Productos;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
  protected $table = 'producto';
  protected $primarykey = 'id';
  public $timestamps=false;

  protected $fillable = ['id','nom_producto','descripcion','stock_actual','estado','idcategoria','idunidad_medida'];
}
