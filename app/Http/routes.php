<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');


});

Route::group(['middleware' => 'web'], function () {

     Route::auth();
     Route::get('/home', 'HomeController@index');

     Route::resource('estado', 'Estado\EstadoController');

     route::resource('producto','Productos\ProductosController');
     route::get('producto.show','Productos\ProductosController@show');

     route::resource('categoria','Categorias\CategoriasController');

     route::resource('unidad','Unidades\UnidadesControllers');

     route::resource('region','Region\RegionController');

     route::resource('provincia','Provincia\ProvinciaController');

     route::resource('distrito','Distrito\DistritoController');
     route::resource('distritos','Distrito\DistritoController@create');

     route::resource('tdocumento','TDocumento\TDocumentoController');

     route::resource('beneficiario','Beneficiario\BeneficiarioController');


 //Rutas para Modulo compras

     route::resource('empresa','Empresa\EmpresaController');

//Rutas para Modulo compras

     route::resource('proveedor','Proveedor\ProveedorController');
     route::get('registro','Registro\RegistroController@registro');

//Rutas para Exportar
     route::get('getExportar','ExportXLS\ExportProductoControllers@getExportar');
     route::get('getExportarpdf','ExportXLS\ExportProductoControllers@getExportarpdf');
     route::get('getExportarProvee','ExportXLS\ExportProveedorControllers@getExportarProvee');
     route::get('getExportarSalida','ExportXLS\ExportSalidaControllers@getExportarSalida');
     route::get('getExportarBeneficiario','ExportXLS\ExportBeneficiarioControllers@getExportarBeneficiario');
     route::get('getExportaringreso','ExportXLS\ExportIngresoControllers@getExportaringreso');


});
