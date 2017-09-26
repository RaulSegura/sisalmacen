<?php

namespace App\Http\Controllers\ExportXLS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use producto;
use Excel;
use DB;

class ExportSalidaControllers extends Controller
{
    //
    public function getExportarSalida(){
      $salida =\App\Modelos\Salida\Salida::all();
      Excel::create('Salida', function($excel) use($salida) {

      $excel->sheet('Salida', function($sheet) use($salida) {

          $sheet->fromArray($salida);

      });

    })->export('xlsx');
    }

}
