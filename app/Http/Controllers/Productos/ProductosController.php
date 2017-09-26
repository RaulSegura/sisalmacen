<?php

namespace App\Http\Controllers\Productos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modelos\Productos\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Productos::
        select('producto.id','producto.nom_producto','producto.descripcion','producto.stock_actual','producto.estado','categoria.nom_categoria as categoria','unidad_medida.nom_unidad as unidad')
        ->join('unidad_medida','unidad_medida.id','=','producto.idunidad_medida') ->join('categoria','categoria.id','=','producto.idcategoria')->get();
        $catego = \App\Modelos\Categorias\Categorias::lists('nom_categoria', 'id') ->prepend('Seleccione una Categoría');
        $UniMed = \App\Modelos\Unidades\Unidades::lists('nom_unidad', 'id') ->prepend('Seleccione una Unidad');
        return view ('productos.index') -> with('productos', $productos) -> with('catego', $catego)-> with('UniMed', $UniMed);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('productos.create');
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
        Productos::create($request->all());
        return redirect()->route('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $productos = Productos::get();
        return view ('productos.show') -> with('productos', $productos);
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
        $productos = Productos::FindOrFail($id);
        return view('productos.edit')->with('productos',$productos);
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
        $productos = Productos::FindOrFail($id);
        $input = $request->all();
        $productos -> fill($input)->save();
        return redirect('productos.index');
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
