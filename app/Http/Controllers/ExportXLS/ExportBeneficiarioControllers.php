<?php

namespace App\Http\Controllers\ExportXLS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use producto;
use Excel;
use DB;

class ExportBeneficiarioControllers extends Controller
{
    //
    public function getExportarBeneficiario(){
      $beneficiario =\App\Modelos\Beneficiario\Beneficiario::all();
      Excel::create('Beneficiario', function($excel) use($beneficiario) {

      $excel->sheet('Beneficiario', function($sheet) use($beneficiario) {

          $sheet->fromArray($beneficiario);

      });

    })->export('xlsx');
    }

}
