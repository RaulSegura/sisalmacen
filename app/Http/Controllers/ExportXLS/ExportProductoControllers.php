<?php

namespace App\Http\Controllers\ExportXLS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use producto;
use Excel;
use DB;

class ExportProductoControllers extends Controller
{
    //
    public function getExportar(){
      $producto=\App\Modelos\Productos\Productos::all();
      Excel::create('Productos', function($excel) use($producto) {

      $excel->sheet('Productos', function($sheet) use($producto) {

          $sheet->fromArray($producto);

      });

  })->export('xlsx');
    }

    public function getExportarpdf(){
      $producto=\App\Modelos\Productos\Productos::all();
      Excel::create('Productos', function($excel) use($producto) {

      $excel->sheet('Productos', function($sheet) use($producto) {

          $sheet->fromArray($producto);

      });

  })->export('pdf');
}
}
