<?php

use App\Http\Controllers\CajaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CodificarController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\TiendaOnlineController;
use App\Http\Controllers\TiendaProductoController;
use App\Http\Controllers\VentaController;
use App\Models\Empleado;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('iniciarsesion', [LoginController::class, 'index'])->name('login.index');
Route::get('inicio', [InicioController::class, 'index'])->name('inicio.index');
Route::resource('clientes', ClienteController::class);

/*Route::controller(ClienteController::class)->group(function () {
    Route::get('clientes', 'index')->name('clientes.index');
    Route::get('clientes/create', 'create')->name('clientes.create');
    Route::get('clientes/{cliente}/edit', 'edit')->name('clientes.edit');
    Route::get('clientes/{cliente}', 'show')->name('clientes.show');
    Route::post('clientes', 'store')->name('clientes.store');
    Route::put('clientes/{cliente}', 'update')->name('clientes.update');
    Route::delete('clientes/{cliente}', 'destroy')->name('clientes.destroy');
});

*/
Route::resource('empleados', EmpleadoController::class);

Route::resource('roles', RolController::class);

Route::resource('productos', ProductoController::class);

Route::resource('categorias', CategoriaController::class);

Route::resource('proveedores', ProveedorController::class);

Route::resource('tienda/productos', TiendaProductoController::class)->names('tiendaProductos');

Route::resource('tienda/servicios', ServicioController::class)->names('tiendaServicios');

Route::resource('tienda/descuentos', DescuentoController::class)->names('tiendaDescuentos');


Route::get('tienda', [TiendaController::class, 'index'])->name('tienda.index');
Route::get('ventas', [VentaController::class, 'index'])->name('ventas.index');
Route::get('caja', [CajaController::class, 'index'])->name('cajas.index');
Route::get('codificar', [CodificarController::class, 'index'])->name('codificar.index');
Route::get('estadisticas', [EstadisticaController::class, 'index'])->name('estadisticas.index');
Route::get('pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('comprobantes', [ComprobanteController::class, 'index'])->name('comprobantes.index');
Route::get('reportes', [ReporteController::class, 'index'])->name('reportes.index');

Route::controller(TiendaOnlineController::class)->group(function () {
    Route::get('onlyhome/inicio', 'index')->name('tiendaOnline.index');
    Route::get('onlyhome/categoria', 'categoria')->name('tiendaOnline.categoria');
    Route::get('onlyhome/detalle', 'detalle')->name('tiendaOnline.detalle');
    Route::get('onlyhome/carrito', 'carrito')->name('tiendaOnline.carrito');
    Route::get('onlyhome/iniciarsesion', 'iniciarsesion')->name('tiendaOnline.iniciarsesion');
    Route::get('onlyhome/registrarse', 'registrarse')->name('tiendaOnline.registrarse');
    Route::get('onlyhome/pasarela', 'pasarela')->name('tiendaOnline.pasarela');
    Route::get('onlyhome/pedidos', 'pedidos')->name('tiendaOnline.pedidos');
    Route::get('onlyhome/pedidos/detalles', 'pedidosdetalles')->name('tiendaOnline.pedidosdetalles');
    Route::get('onlyhome/servicios', 'servicios')->name('tiendaOnline.servicios');
    Route::get('onlyhome/mejorescalificados', 'mejorescalificados')->name('tiendaOnline.mejorescalificados');
    Route::get('onlyhome/descuentos', 'descuentos')->name('tiendaOnline.descuentos');
    Route::get('onlyhome/politicas', 'politicas')->name('tiendaOnline.politicas');
    Route::get('onlyhome/nosotros', 'nosotros')->name('tiendaOnline.nosotros');
    Route::get('onlyhome/libroreclamaciones', 'libroreclamaciones')->name('tiendaOnline.libroreclamaciones');
    Route::get('onlyhome/recuperarcontraseña', 'recuperarcontraseña')->name('tiendaOnline.recuperarcontraseña');




});
