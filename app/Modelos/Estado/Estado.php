<?php

namespace App\Modelos\Estado;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = 'estado';
    protected $primarykey = 'id';
    public $timestamps=false;

    protected $fillable = ['id','nombre_estado'];

}
