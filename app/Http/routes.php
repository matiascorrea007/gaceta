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
    
Route::get('/','PaginasController@home');
Route::get('blog','PaginasController@post');
Route::get('blogdetail-post{id}',[
'as'=>'paginas.postDetalle',
'uses'=>'PaginasController@postDetalle'
	]);
Route::get('subcategoria-{slug}','PaginasController@subcategoria');
Route::get('item-detalle-{slug}',[
'as'=>'paginas.itemDetalle',
'uses'=>'PaginasController@itemDetalle'
	]);

Route::post('review/{slug}','ReviewsController@Reviews');

Route::get('preguntas-frecuentes','PaginasController@PreguntasFrecuentes');
Route::get('formas-de-pago','PaginasController@FormasDePago');
Route::get('garantia','PaginasController@garantia');
Route::get('aviso-legal','PaginasController@AvisoLegal');
Route::get('envios','PaginasController@envios');
Route::get('ubicacion','PaginasController@ubicacion');







/*------------------contactenos-----------------------*/
Route::get('contacto','PaginasController@contacto');
Route::post('mail','MailController@send');
/*------------------contactenos-----------------------*/
/*------------------newsletter-----------------------*/
Route::post('subscribirse','MailController@subscribirse');
Route::get('newsletter','MailController@newsletter');
Route::post('newsletter-enviar','MailController@newsletterEnviar');
/*------------------newsletter-----------------------*/



Route::get('web-addtocart/{id}','WebVentas@add');
Route::get('web-shopping-cart','WebVentas@show');


//eliminar carricato
Route::get('web-trash','WebVentas@trash');
//eliminar productos del carrito
Route::get('web-delete/{id}','WebVentas@delete');
//actualizar items
Route::get('web-update/{id}/{cantidad}','WebVentas@update');


Route::get('checkout','WebVentas@CheckoutStep1');
Route::get('buscador','BuscadorController@buscador');





});





Route::group(array('middleware' => 'auth'), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});


Route::group(['middleware' =>['admin']], function () {

 Route::get('/admin', 'FrontController@admin');
 Route::get('usuario/perfil','UsuarioController@perfil');




/*---------------VENTAS------------*/
//busqueda de los productos
Route::get('venta-busqueda','VentaController@addproducto');
//mostrar
Route::get('venta-show','VentaController@show');
//chekout finalizar carrito
Route::post('venta-checkout','VentaController@checkout');
Route::get('venta-checkout','VentaController@checkout');
//listar ventas
Route::get('listar-venta/','VentaController@listarVenta');
//listar ventas WEB
Route::get('listar-venta-web/','VentaController@listarVentaWeb');

Route::get('venta-detalle-pdf/{tipo}/{id}','VentaController@detalleVentaPdf');
//cambiar status de venta
Route::post('cambiar-status/{id}',[
'as'=>'venta.cambiarstatus',
'uses'=>'VentaController@cambiarStatus'
	]);

Route::post('cambiar-status-web/{id}',[
'as'=>'venta.cambiarStatusWeb',
'uses'=>'VentaController@cambiarStatusWeb'
	]);

//enviar factura por correo
Route::get('venta-enviar-factura','VentaController@enviarFactura');
//pagar por mercadopago
Route::get('venta-pagar-{id}','VentaController@PagarFactura');

/*---------------VENTAS------------*/



/*---------------PRESUPUESTOS------------*/
Route::get('presupuesto-show','PresupuestoController@show');
//chekout finalizar carrito
Route::post('presupuesto-checkout','PresupuestoController@checkout');
Route::get('presupuesto-checkout','PresupuestoController@checkout');
//listamos los presupuestos
Route::get('listar-presupuesto','PresupuestoController@listarPresupuestos');
//ver pdf del presupuesto
Route::get('presupuesto-detalle-pdf/{tipo}/{id}','PresupuestoController@detallePresupuestoPdf');
/*---------------PRESUPUESTOS------------*/



/*-------------------------------- COMPRAS------------------------------*/
//busqueda de los productos
Route::get('compra-busqueda','CompraController@addproducto');
//mostrar
Route::get('compra-show','CompraController@show');
//chekout finalizar carrito
Route::post('compra-checkout','CompraController@checkout');
Route::get('compra-checkout','CompraController@checkout');
//listar Compras
Route::get('listar-compra/','CompraController@listarCompra');
//listar Compras WEB
Route::get('listar-compra-web/','CompraController@listarCompraWeb');
//ver en pdf las compras
Route::get('compra-detalle-pdf/{tipo}/{id}','CompraController@detalleCompraPdf');
//cambiar status de compra
Route::post('cambiar-status-compra/{id}',[
'as'=>'compra.cambiarStatus',
'uses'=>'CompraController@cambiarStatus'
	]);
//cambiar entrega de compra
Route::post('cambiar-entrega/{id}',[
'as'=>'compra.cambiarEntrega',
'uses'=>'CompraController@cambiarEntrega'
	]);
/*--------------------------------COMPRAS------------------------------*/


/*--------------------------------SECCION LIQUIDACIONES------------------------------*/
//mostrar
Route::get('liquidacion-show','LiquidacionController@show');
//generar
Route::post('liquidacion-generar','LiquidacionController@generar');
//cargar usuario
Route::get('liquidacion-addusuario/','LiquidacionController@seleccionarUsuario');
//mandamos id del cliente para almacenarlo en la sessio
Route::get('liquidacion-usuario/{id}','LiquidacionController@addUsuario');
/*--------------------------------SECCION LIQUIDACIONES------------------------------*/





/*---------------menu------------*/
Route::get('usuario','UsuarioController@index');
Route::get('usuario-create','UsuarioController@create');
Route::post('usuario-store','UsuarioController@store');
Route::put('usuario-update/{id}','UsuarioController@update');
Route::delete('usuario-destroy/{id}','UsuarioController@destroy');


Route::get('skin','SkinController@index');
Route::get('skin-create','SkinController@create');
Route::post('skin-store','SkinController@store');
Route::put('skin-update/{id}','SkinController@update');
Route::delete('skin-destroy/{id}','SkinController@destroy');


Route::delete('rubro/deletemultiple','RubroController@deleteMultiple');
Route::resource('rubro','RubroController');

Route::get('ivatipo','IvatipoController@index');
Route::get('ivatipo-create','IvatipoController@create');
Route::post('ivatipo-store','IvatipoController@store');
Route::put('ivatipo-update/{id}','IvatipoController@update');
Route::delete('ivatipo-destroy/{id}','IvatipoController@destroy');

Route::get('marca','MarcaController@index');
Route::get('marca-create','MarcaController@create');
Route::post('marca-store','MarcaController@store');
Route::put('marca-update/{id}','MarcaController@update');
Route::delete('marca-destroy/{id}','MarcaController@destroy');


Route::get('transporte','TransporteController@index');
Route::get('transporte-create','TransporteController@create');
Route::get('transporte-edit/{id}','TransporteController@edit');
Route::post('transporte-store','TransporteController@store');
Route::post('transporte-update','TransporteController@update');
Route::delete('transporte-destroy/{id}','TransporteController@destroy');


Route::get('puntos','PuntosController@index');
Route::get('puntos-create','PuntosController@create');
Route::post('puntos-store','PuntosController@store');
Route::put('puntos-update/{id}','PuntosController@update');
Route::delete('puntos-destroy/{id}','PuntosController@destroy');

Route::get('puntos-seleccionar-usuario','PuntosController@seleccionarUsuario');
Route::get('puntos-agregar-usuario/{id}','PuntosController@addUsuario');
Route::get('puntos-agregar-puntos/{id}','PuntosController@AgregarPuntos');



/*------------------------------------Producto--------------------------------------------*/
//listar productos
Route::get('producto','ProductoController@index');
//store producto
Route::get('producto-create','ProductoController@create');
//crear producto
Route::post('producto-store','ProductoController@store');
//ver producto
Route::get('producto-show-{id}','ProductoController@show');
//editar producto
Route::get('producto-edit-{id}','ProductoController@edit');
//update producto
Route::put('producto-update/{id}','ProductoController@update');
//elimina producto
Route::delete('producto-destroy/{id}','ProductoController@destroy');
/*------------------------------------Producto--------------------------------------------*/


/*------------------------------------Producto Combo----------------------------------------*/
//calcular precio del combo
Route::get('producto-calcular/{gabinete}/{mother}/{procesador}/{mouse}/{teclado}/{video}/{fuente}/{disco}/{memoria}','ProductoController@calcularCombo');
Route::post('producto-calcular/{gabinete}/{mother}/{procesador}/{mouse}/{teclado}/{video}/{fuente}/{disco}/{memoria}','ProductoController@calcularCombo');

//calcular costo del combo
Route::get('producto-calcular-costo/{gabinete}/{mother}/{procesador}/{mouse}/{teclado}/{video}/{fuente}/{disco}/{memoria}','ProductoController@calcularCostoCombo');
Route::post('producto-calcular-costo/{gabinete}/{mother}/{procesador}/{mouse}/{teclado}/{video}/{fuente}/{disco}/{memoria}','ProductoController@calcularCostoCombo');

//store combo pc
Route::get('producto-combo-pc','ProductoController@ComboPc');
Route::post('producto-combo-create','ProductoController@CreateComboPc');
//ver combo pc
Route::get('producto-combo-ver-{id}','ProductoController@VerComboPc');
//editar combo pc
Route::get('producto-combo-edit-{id}','ProductoController@EditComboPc');
//update combo pc
Route::put('producto-combo-update/{id}','ProductoController@UpdateComboPc');
//eliminar combo
//elimina al combo
Route::delete('producto-combo-delete/{id}','ProductoController@destroyCombo');
/*------------------------------------Producto Combo----------------------------------------*/

/*------------------------------------Codigo de Barras----------------------------------------*/
Route::get('codigos-barras-filtrar','CodigoBarrasControler@CodigoDeBarrasFiltrar');
Route::post('codigos-barras-generar','CodigoBarrasControler@GenerarCodigoDeBarras');
/*------------------------------------Codigo de Barras----------------------------------------*/

//pestañas
Route::get('producto-oferta','ProductoController@ProductosOferta');
Route::get('producto-stock-critico','ProductoController@StockCritico');
Route::get('producto-desabilitado','ProductoController@ProductoDesabilitado');
Route::get('producto-review','ProductoController@ProductoReview');
Route::get('producto-combo','ProductoController@ProductosCombo');

Route::get('producto-review-{slug}','ReviewsController@ReviewsVer');
Route::DELETE('producto-review-delete/{id}','ReviewsController@ReviewsDelete');
Route::get('producto-review-confirm/{id}','ReviewsController@ReviewsConfirm');
Route::get('producto-review-spam/{id}','ReviewsController@ReviewsSpam');

Route::resource('productoimagen','ProductoImagenController');


 //me devuelve las subcategorias al crear el prodcuto (select dinamico)
Route::get('ajax-subcategoria',function(){
	$cat_id = Input::get('cat_id');
	$subcategorias = categoriasub::where('categoria_id','=', $cat_id)->get();
	return Response::json($subcategorias);
});


/*porducto carga de imaganes*/
Route::get('producto-uploadimagen-{id}','ProductoImagenController@crear');
Route::post('producto-imagen/{id}',[
'as'=>'ProductoImagen.uploadFiles',
'uses'=>'ProductoImagenController@uploadFiles'
	]);
Route::delete('producto-destroyimagen/{id}',[
'as'=>'ProductoImagen.destroy',
'uses'=>'ProductoImagenController@destroy'
	]);
/*porducto carga de imaganes*/

Route::get('tags', function (Illuminate\Http\Request  $request) {
        $term = $request->term ?: '';
        $tags = Soft\Tag::where('nombre', 'like', $term.'%')->lists('nombre', 'id');
        $valid_tags = [];
        foreach ($tags as $id => $tag) {
            $valid_tags[] = ['id' => $id, 'text' => $tag];
        }
        return \Response::json($valid_tags);
    });



Route::get('provedor','ProvedoreController@index');
Route::get('provedor-create','ProvedoreController@create');
Route::post('provedor-store','ProvedoreController@store');
Route::put('provedor-update/{id}','ProvedoreController@update');
Route::delete('provedor-destroy/{id}','ProvedoreController@destroy');









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

Route::get('categoria','CategoriaController@index');
Route::get('categoria-create','CategoriaController@create');
Route::post('categoria-store','CategoriaController@store');
Route::put('categoria-update/{id}','CategoriaController@update');
Route::delete('categoria-destroy/{id}','CategoriaController@destroy');


Route::get('categoriasub','CategoriaSubController@index');
Route::get('categoriasub-create','CategoriaSubController@create');
Route::post('categoriasub-store','CategoriaSubController@store');
Route::put('categoriasub-update/{id}','CategoriaSubController@update');
Route::delete('categoriasub-destroy/{id}','CategoriaSubController@destroy');


Route::get('tickets','TicketController@index');
Route::get('tickets-completados','TicketController@TicketCompletados');
Route::post('tickets-cambiar-status/{id}','TicketController@TicketCambiarStatus');
Route::get('tickets-responder/{id}','TicketController@TicketResponder');
Route::put('tickets-comentario/{id}','TicketController@TicketComentario');



Route::get('reparaciones','ServicioTecnicoController@index');
Route::get('reparaciones-completados','ServicioTecnicoController@ReparacionesCompletadas');
Route::get('reparaciones-canceladas','ServicioTecnicoController@ReparacionesCancelada');
Route::get('reparacion-create','ServicioTecnicoController@create');
Route::get('reparacion-seleccionar-usuario','ServicioTecnicoController@seleccionarUsuario');
Route::get('reparacion-agregar-usuario/{id}','ServicioTecnicoController@addUsuario');
Route::post('reparacion-store','ServicioTecnicoController@store');
Route::put('reparacion-update/{id}','ServicioTecnicoController@store');
Route::post('reparacion-cambiar-status/{id}','ServicioTecnicoController@ServicioCambiarStatus');
Route::delete('reparacion-destroy/{id}','ServicioTecnicoController@destroy');
Route::get('reparacion-pdf/{tipo}/{id}','ServicioTecnicoController@crearReporteReparacion');




/*---------------menu------------*/


/*---------------WEB CONFIG------------*/


Route::get('carrucel','WebCarrucelController@index');
Route::get('carrucel-create','WebCarrucelController@create');
Route::post('carrucel-store','WebCarrucelController@store');
Route::put('carrucel-update/{id}','WebCarrucelController@update');
Route::delete('carrucel-destroy/{id}','WebCarrucelController@destroy');

Route::get('carrucelmarcas','WebCarrucelMarcasController@index');
Route::get('carrucelmarcas-create','WebCarrucelMarcasController@create');
Route::post('carrucelmarcas-store','WebCarrucelMarcasController@store');
Route::put('carrucelmarcas-update/{id}','WebCarrucelMarcasController@update');
Route::delete('carrucelmarcas-destroy/{id}','WebCarrucelMarcasController@destroy');


Route::get('webconfig-footer','WebFooterController@ConfigFooter');

Route::get('informacion','WebInformacionController@index');
Route::get('informacion-create','WebInformacionController@create');
Route::post('informacion-store','WebInformacionController@store');
Route::put('informacion-update/{id}','WebInformacionController@update');
Route::delete('informacion-destroy/{id}','WebInformacionController@destroy');


Route::get('facebook','WebFacebookController@index');
Route::get('facebook-create','WebFacebookController@create');
Route::post('facebook-store','WebFacebookController@store');
Route::put('facebook-update/{id}','WebFacebookController@update');
Route::delete('facebook-destroy/{id}','WebFacebookController@destroy');

Route::get('mercadopago','WebMercadoPagoController@index');
Route::get('mercadopago-create','WebMercadoPagoController@create');
Route::post('mercadopago-store','WebMercadoPagoController@store');
Route::put('mercadopago-update/{id}','WebMercadoPagoController@update');
Route::delete('mercadopago-destroy/{id}','WebMercadoPagoController@destroy');

Route::get('logo','WebLogoController@index');
Route::get('logo-create','WebLogoController@create');
Route::post('logo-store','WebLogoController@store');
Route::put('logo-update/{id}','WebLogoController@update');
Route::delete('logo-destroy/{id}','WebLogoController@destroy');


Route::get('post','WebPostController@index');
Route::get('post-edit/{id}','WebPostController@edit');
Route::get('post-create','WebPostController@create');
Route::post('post-store','WebPostController@store');
Route::post('post-update','WebPostController@update');
Route::delete('post-destroy','WebPostController@destroy');
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
/*---------------CHECKOUT------------*/
Route::get('checkout-step-2','WebVentas@CheckoutStep2');
Route::get('checkout-step-3','WebVentas@CheckoutStep3');
Route::match(['get','post'],'checkout-step-4','WebVentas@CheckoutStep4');
Route::match(['get','post'],'checkout-step-5','WebVentas@CheckoutStep5');
Route::match(['get','post'],'checkout-step-6','WebVentas@CheckoutStep6');


Route::resource('pago','MercadoPagoController');
/*---------------CHECKOUT------------*/


/*---------------USER ACCOUNT------------*/
Route::resource('myaccount-edit','WebAccount@update');
Route::get('myaccount-perfil','WebAccount@MyAccount');
Route::get('myaccount-config','WebAccount@MyAccountConfig');
Route::get('myaccount-puntos','WebAccount@MyAccountPuntos');
Route::get('myaccount-facturas','WebAccount@verFacturas');
Route::get('myaccount-detalle-pdf/{tipo}/{id}','WebAccount@detalleVentaPdf');
Route::get('myaccount-ticket','WebAccount@MyAccountTicket');
Route::get('myaccount-ticket-responder-{id}','WebAccount@MyAccountTicketResponder');
Route::put('myaccount-ticket-comentario/{id}','WebAccount@MyAccountTicketComentario');
Route::post('myaccount-ticket-crear','WebAccount@MyAccountTicketCrear');
//cuando crea desde la cuenta del user
Route::post('myaccount-datos-facturacion',[
	'uses'=>'WebAccount@DatosDeFacturacion',
	'as'=>'myaccount.DatosDeFacturacion'
	]);
//cuando edita desde la cuenta del user
Route::put('myaccount-edit-datos-facturacion/{id}',[
	'uses'=>'WebAccount@EditarFacturacion',
	'as'=>'myaccount.EditarFacturacion'
	]);
//cuando crea desde el checkout
Route::post('myaccount-datos-facturacion-checkout',[
	'uses'=>'WebAccount@DatosDeFacturacionCheckout',
	'as'=>'myaccount.DatosDeFacturacionCheckout'
	]);
//cuando edita desde el checkout
Route::put('myaccount-edit-datos-facturacion-checkout/{id}',[
	'uses'=>'WebAccount@EditarFacturacionCheckout',
	'as'=>'myaccount.EditarFacturacionCheckout'
	]);
/*---------------USER ACCOUNT------------*/



/*---------------menu WEB------------*/


/*---------------login------------*/
//sistema de logue para laravel 5.2
Route::auth();
//para redireccionar si ya esta logueado y trata de entrar al login
Route::get('logged', 'LoginController@logged');
Route::get('login-redirect', 'LoginController@LoginRedirect');


/*---------------login------------*/










/*
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@getEmail');

//sistema de logue para laravel 5.2
Route::auth();


Route::resource('mail','MailController');
//para redireccionar si ya esta logueado y trata de entrar al login
Route::get('logged', 'LoginController@index');

//enrutado ressfull

Route::resource('genero', 'GeneroController');
Route::resource('pelicula', 'PeliculaController');


//ADMINISTRADOR

//el auth es un middleware que significa que solo puede acceder a la ruta si esta logueado
//y el middleware es el que nosotros creamos para cada ruta espesifica
Route::group(['middleware'=>['guest']], function(){


});
*/
});
