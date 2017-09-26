<?php

namespace App\Modelos\TDocumento;

use Illuminate\Database\Eloquent\Model;

class TDocumento extends Model
{
    //
    protected $table = 'tipo_documento';
    protected $primarykey = 'id';
    public $timestamps=false;

    protected $fillable = ['id','nombre','operacion'];
}
