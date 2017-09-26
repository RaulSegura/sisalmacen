<?php

namespace App\Http\Controllers\Registro;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistroController extends Controller
{
    //
    public function registro()
    {
    return view ('formularios/registro/registro');
    }
}
