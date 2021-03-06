<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller('login', 'LoginController');
Route::controller('usuarios', 'UsuariosController');
Route::controller('proveedores', 'ProveedoresController');
Route::controller('clientes', 'ClientesController');
Route::controller('categorias', 'CategoriasController');
Route::controller('productos', 'ProductosController');
Route::controller('inventarios', 'InventariosController');
Route::controller('entradas', 'EntradasController');
Route::controller('imagenes', 'ImagesController');
Route::controller('paises', 'PaisesController');
Route::controller('ciudades', 'CiudadesController');
Route::controller('configuracion', 'ConfiguracionController');
Route::controller('taxis', 'TaxiDriver\TaxisController');


Route::controller('au_imagenes', 'AuditSystem\ImagesController');
Route::controller('au_propiedad', 'AuditSystem\PropiedadController');
Route::controller('au_iglesias', 'AuditSystem\IglesiasController');
Route::controller('au_asociaciones', 'AuditSystem\AsociacionesController');
Route::controller('au_uniones', 'AuditSystem\UnionesController');
Route::controller('auditorias', 'AuditSystem\AuditoriasController');
Route::controller('remesas', 'AuditSystem\RemesasController');
Route::controller('au_usuario', 'AuditSystem\AuUsuarioController');
Route::controller('au_usuarios', 'AuditSystem\AuUsuariosController');
Route::controller('au_observaciones', 'AuditSystem\ObservacionesController');
Route::controller('au_login', 'AuditSystem\LoginController');
Route::controller('au_comparar', 'AuditSystem\Informes\CompararController');
Route::controller('au_entidades', 'AuditSystem\Entidades\EntidadesController');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
