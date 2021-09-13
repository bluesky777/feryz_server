<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

AdvancedRoute::controller('login', 'LoginController');
AdvancedRoute::controller('usuarios', 'UsuariosController');
AdvancedRoute::controller('proveedores', 'ProveedoresController');
AdvancedRoute::controller('clientes', 'ClientesController');
AdvancedRoute::controller('categorias', 'CategoriasController');
AdvancedRoute::controller('productos', 'ProductosController');
AdvancedRoute::controller('inventarios', 'InventariosController');
AdvancedRoute::controller('entradas', 'EntradasController');
AdvancedRoute::controller('imagenes', 'ImagesController');
AdvancedRoute::controller('paises', 'PaisesController');
AdvancedRoute::controller('ciudades', 'CiudadesController');
AdvancedRoute::controller('configuracion', 'ConfiguracionController');
AdvancedRoute::controller('taxis', 'TaxiDriver\TaxisController');


AdvancedRoute::controller('au_imagenes', 'AuditSystem\ImagesController');
AdvancedRoute::controller('au_propiedad', 'AuditSystem\PropiedadController');
AdvancedRoute::controller('au_iglesias', 'AuditSystem\IglesiasController');
AdvancedRoute::controller('au_asociaciones', 'AuditSystem\AsociacionesController');
AdvancedRoute::controller('au_uniones', 'AuditSystem\UnionesController');
AdvancedRoute::controller('auditorias', 'AuditSystem\AuditoriasController');
AdvancedRoute::controller('remesas', 'AuditSystem\RemesasController');
AdvancedRoute::controller('au_usuario', 'AuditSystem\AuUsuarioController');
AdvancedRoute::controller('au_usuarios', 'AuditSystem\AuUsuariosController');
AdvancedRoute::controller('au_observaciones', 'AuditSystem\ObservacionesController');
AdvancedRoute::controller('au_login', 'AuditSystem\LoginController');
AdvancedRoute::controller('au_comparar', 'AuditSystem\Informes\CompararController');
AdvancedRoute::controller('au_entidades', 'AuditSystem\Entidades\EntidadesController');