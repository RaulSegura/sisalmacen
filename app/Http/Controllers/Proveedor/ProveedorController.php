<?php

namespace App\Http\Controllers\Proveedor;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $proveedores = \App\Modelos\Proveedor\Proveedor::
      select('proveedor.id', 'proveedor.nombre', 'proveedor.direccion', 'proveedor.telefono', 'proveedor.celular',
      'proveedor.email', 'proveedor.pag_web', 'distrito.nom_distrito','provincia.nom_provincia','region.nom_region')
      ->join('distrito','distrito.id','=','proveedor.iddistrito')
      ->join('provincia','provincia.id','=','proveedor.idprovincia')
      ->join('region','region.id','=','proveedor.idregion')->get();
      $distrito = \App\Modelos\Distrito\Distrito::lists('nom_distrito', 'id') ->prepend('Seleccione un Distrito');
      $provincia = \App\Modelos\Provincia\Provincia::lists('nom_provincia', 'id') ->prepend('Seleccione una Provincia');
      $region = \App\Modelos\Region\Region::lists('nom_region', 'id') ->prepend('Seleccione una Región');
        return view ('proveedor.index') -> with('proveedores', $proveedores) -> with('distrito', $distrito)
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
        return view ('proveedor.create');
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
         \App\Modelos\Proveedor\Proveedor::create($request->all());
        return redirect('proveedor');
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
        $proveedores = \App\Modelos\Proveedor\Proveedor::FindOrFail($id);
        return view('Proveedor.edit')->with('proveedores',$proveedores);
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
        $proveedores = \App\Modelos\Proveedor\Proveedor::FindOrFail($id);
        $input = $request->all();
        $proveedores -> fill($input)->save();
        return redirect()->route('proveedor.index');
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
