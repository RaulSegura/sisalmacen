<?php

namespace App\Http\Controllers\Beneficiario;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BeneficiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     

    public function index()
    {
        //
        $beneficiarios =  \App\Modelos\Beneficiario\Beneficiario::
        select('beneficiario.id', 'beneficiario.nombre', 'beneficiario.direccion', 'beneficiario.telefono','distrito.nom_distrito',
        'provincia.nom_provincia','region.nom_region')
        ->join('distrito','distrito.id','=','beneficiario.iddistrito')
        ->join('provincia','provincia.id','=','beneficiario.idprovincia')
        ->join('region','region.id','=','beneficiario.idregion')->get();
        $distrito = \App\Modelos\Distrito\Distrito::lists('nom_distrito', 'id') ->prepend('Seleccione un Distrito');
        $provincia = \App\Modelos\Provincia\Provincia::lists('nom_provincia', 'id') ->prepend('Seleccione una Provincia');
        $region = \App\Modelos\Region\Region::lists('nom_region', 'id') ->prepend('Seleccione una Región');
          return view ('beneficiario.index') -> with('beneficiarios', $beneficiarios) -> with('distrito', $distrito)
          -> with('provincia', $provincia)-> with('region', $region);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('beneficiario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        \App\Modelos\Beneficiario\Beneficiario::create($request->all());
       return redirect('beneficiario');
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
        $beneficiarios = \App\Modelos\Beneficiario\Beneficiario::FindOrFail($id);
        return view('beneficiario.edit')->with('beneficiarios',$beneficiarios);
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
        $beneficiarios = \App\Modelos\Beneficiario\Beneficiario::FindOrFail($id);
        $input = $request->all();
        $beneficiarios -> fill($input)->save();
        return redirect()->route('beneficiario.index');
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
