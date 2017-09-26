<?php

namespace App\Http\Controllers\ExportXLS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use producto;
use Excel;
use DB;

class ExportIngresoControllers extends Controller
{
    //
    public function getExportaringreso(){
      $ingreso =\App\Modelos\ingreso\ingreso::all();
      Excel::create('Ingreso', function($excel) use($ingreso) {

      $excel->sheet('Ingreso', function($sheet) use($ingreso) {

          $sheet->fromArray($ingreso);

      });

    })->export('xlsx');
    }

}
