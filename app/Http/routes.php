<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post , get , delete , put
*/
//activando la proteccion token contra ataques a formularios


//rutas , el primer parammetro es el nombre de la ruta
//el segundo parametro llama a la funcion dentro de frontController
use Soft\Categoria;
use Soft\Categoriasub;
use Soft\Http\Requests;
use Soft\Http\Requests\Request;


Route::group(['middleware' => 'web'], function () {
Route::get('/','FrontController@home');
});





Route::group(array('middleware' => 'auth'), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});


Route::group(['middleware' =>['admin']], function () {

 Route::get('/admin', 'FrontController@admin');



/*---------------menu------------*/
Route::get('usuario','UsuarioController@index');
Route::get('usuario-create','UsuarioController@create');
Route::post('usuario-store','UsuarioController@store');
Route::put('usuario-update/{id}','UsuarioController@update');
Route::delete('usuario-destroy/{id}','UsuarioController@destroy');


//backup 
Route::get('backup', 'BackupController@index');


Route::get('cliente','ClienteController@index');
Route::get('cliente-mensuales','ClienteController@mensuales');
Route::get('cliente-quincenales','ClienteController@quincenales');
Route::get('cliente-create','ClienteController@create');
Route::post('cliente-store','ClienteController@store');
Route::put('cliente-update/{id}','ClienteController@update');
Route::delete('cliente-destroy/{id}','ClienteController@destroy');


Route::get('factura-ver-{id}','FacturaController@index');
Route::post('factura-cambiar-status/{id}','FacturaController@cambiarStatus');
Route::post('factura-store-{id}','FacturaController@store');
Route::put('factura-update/{id}','FacturaController@update');
Route::delete('factura-destroy/{id}','FacturaController@destroy');
Route::get('factura-detalle-pdf/{tipo}/{id}','FacturaController@detalleFacturaPdf');
Route::post('factura-detalle-seleccion-pdf/{tipo}','FacturaController@detalleSeleccionFacturaPdf');

Route::get('todas-las-facturas','FacturaController@todasLasFacturas');
Route::get('facturas-pagadas','FacturaController@facturasPagadas');
Route::get('facturas-pendientes','FacturaController@facturasPendientes');


Route::get('precio','PrecioController@index');
Route::get('precio-ver-{id}','PrecioController@ver');
Route::post('precio-store','PrecioController@store');
Route::put('precio-update/{id}','PrecioController@update');
Route::delete('precio-destroy/{id}','PrecioController@destroy');

Route::get('reparto','RepartoController@index');
Route::get('reparto-calcular','RepartoController@repartoCalcular');


Route::get('gasto','GastoController@index');
Route::get('gasto-create','GastoController@create');
Route::post('gasto-store','GastoController@store');
Route::put('gasto-update/{id}','GastoController@update');
Route::delete('gasto-destroy/{id}','GastoController@destroy');

Route::get('pago-show','PagoController@index');
Route::get('pago-create','PagoController@create');
Route::post('pago-store','PagoController@store');
Route::put('pago-update/{id}','PagoController@update');
Route::delete('pago-destroy/{id}','PagoController@destroy');
/*---------------menu------------*/


/*---------------WEB CONFIG------------*/
Route::get('logo','WebLogoController@index');
Route::get('logo-create','WebLogoController@create');
Route::post('logo-store','WebLogoController@store');
Route::put('logo-update/{id}','WebLogoController@update');
Route::delete('logo-destroy/{id}','WebLogoController@destroy');
/*---------------WEB CONFIG------------*/


/*---------------reportes Pdf------------*/
//agregado pdf
Route::get('reportes', 'PdfController@index');
Route::get('crear_reporte_porpais/{tipo}', 'PdfController@crear_reporte_porpais');
/*---------------reportes Pdf------------*/

/*--------------------------------REPORTES GRAFICAS------------------------------*/
Route::get('listado_graficas', 'GraficasController@index');
Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');
/*--------------------------------REPORTES GRAFICAS------------------------------*/


/*---------------Excel import/export ------------*/
/*--------user --------*/
Route::get('/userExport','ExcelController@userExport');
Route::get('/userImport','ExcelController@userImport');
Route::post('/userImport','ExcelController@userImport');


/*--------reparto --------*/
Route::get('reparto-export-{fecha}','ExcelController@repartoExport');
/*---------------Excel import/export ------------*/


 });



Route::group(['middleware' =>['auth']], function () {
/*---------------login------------*/
//sistema de logue para laravel 5.2
Route::auth();
//para redireccionar si ya esta logueado y trata de entrar al login
Route::get('logged', 'LoginController@logged');
Route::get('login-redirect', 'LoginController@LoginRedirect');
/*---------------login------------*/

});
