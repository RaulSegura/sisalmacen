<?php

namespace App\Http\Controllers\Unidades;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UnidadesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $unidades = \App\Modelos\Unidades\Unidades::get();

        return view ('unidad.index') -> with('unidades', $unidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return View('unidad.create');
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
        \App\Modelos\Unidades\Unidades::create($request->all());
        return redirect('unidad');
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
        $unidades = \App\Modelos\Unidades\Unidades::FindOrFail($id);
       return view('unidad.show')->with('unidades',$unidades);
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
        $unidades = \App\Modelos\Unidades\Unidades::FindOrFail($id);
        return view('unidad.edit')->with('unidades',$unidades);
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
        $unidades = \App\Modelos\Unidades\Unidades::FindOrFail($id);
        $input = $request->all();
        $unidades -> fill($input)->save();
        return redirect()->route('unidad.index');
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
        $unidades = \App\Modelos\Unidades\Unidades::FindOrFail($id);
        $unidades->delete();
        return redirect()->route('unidad.index');
    }
}
