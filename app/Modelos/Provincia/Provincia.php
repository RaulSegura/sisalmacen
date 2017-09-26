<?php

namespace App\Modelos\Provincia;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
  protected $table = 'provincia';
  protected $primarykey = 'id';
  public $timestamps=false;

  protected $fillable = ['id','nom_provincia','Id_region'];
}
