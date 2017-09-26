<?php

namespace App\Http\Controllers\Provincia;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $provincias = \App\Modelos\Provincia\Provincia::
      select('provincia.id','provincia.nom_provincia','region.nom_region')
      ->join('region','region.id','=','provincia.idregion')->get();
      $regio = \App\Modelos\Region\Region::lists('nom_region', 'id') ->prepend('Seleccione una Región');
      return view ('provincias.index') -> with('provincias', $provincias)  -> with('regio', $regio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View('provincias.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      \App\Modelos\Provincia\Provincia::create($request->all());
      return redirect('provincias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $provincias = \App\Modelos\Provincia\Provincia::FindOrFail($id);
        $input = $request->all();
        $provincias -> fill($input)->save();
        return redirect()->route('provincias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
