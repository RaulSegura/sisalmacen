<?php

namespace App\Modelos\Region;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  protected $table = 'region';
  protected $primarykey = 'id';
  public $timestamps=false;

  protected $fillable = ['id','nom_region'];
}
