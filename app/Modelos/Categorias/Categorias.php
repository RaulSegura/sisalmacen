<?php

namespace App\Modelos\Categorias;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    protected $table = 'categoria';
    protected $primarykey = 'id';
    public $timestamps=false;

    protected $fillable = ['id','nom_categoria'];

    public function scopeBuscarCategoriaId($query,$id){
      $query->where('id',$id);
    }
}
