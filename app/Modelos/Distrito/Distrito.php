<?php

namespace App\Modelos\Distrito;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
  protected $table = 'distrito';
  protected $primarykey = 'id';
  public $timestamps=false;

  protected $fillable = ['id','nom_distrito', 'idprovincia'];
}
