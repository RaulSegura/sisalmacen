<?php

namespace App\Http\Controllers\ExportXLS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use producto;
use Excel;
use DB;

class ExportProveedorControllers extends Controller
{
    //
    public function getExportarProvee(){
      $proveedor =\App\Modelos\Proveedor\Proveedor::all();
      Excel::create('Proveedor', function($excel) use($proveedor) {

      $excel->sheet('Proveedor', function($sheet) use($proveedor) {

          $sheet->fromArray($proveedor);

      });

    })->export('xlsx');
    }

}
