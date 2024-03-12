<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
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


Route::controller(ClienteController::class)->group(function () {
    Route::get('clientes', 'index')->name('clientes.index');
    Route::get('clientes/crear', 'create')->name('clientes.create');
    Route::get('clientes/actualizar/{cliente}', 'update')->name('clientes.update');
    Route::get('clientes/detalle/{cliente}', 'show')->name('clientes.show');
    Route::post('clientes', 'store')->name('clientes.store');
    Route::put('clientes/{cliente}', 'edit')->name('clientes.edit');
    Route::delete('clientes/{cliente}', 'destroy')->name('clientes.destroy');
});




Route::controller(EmpleadoController::class)->group(function () {
    Route::get('empleados', 'index')->name('empleados.index');
    Route::get('empleados/crear', 'create')->name('empleados.create');
    Route::get('empleados/actualizar/{empleado}', 'update')->name('empleados.update');
    Route::get('empleados/detalle/{empleado}', 'show')->name('empleados.show');
    Route::post('empleados', 'store')->name('empleados.store');
    Route::put('empleados/{empleado}', 'edit')->name('empleados.edit');
    Route::delete('empleados/{empleado}', 'destroy')->name('empleados.destroy');
});

Route::controller(ProductoController::class)->group(function () {
    Route::get('productos', 'index')->name('productos.index');
    Route::get('productos/crear', 'create')->name('productos.create');
    Route::get('productos/actualizar/{producto}', 'update')->name('productos.update');
    Route::get('productos/detalle/{producto}', 'show')->name('productos.show');
    Route::post('productos', 'store')->name('productos.store');
    Route::put('productos/{producto}', 'edit')->name('productos.edit');
    Route::delete('productos/{producto}', 'destroy')->name('productos.destroy');
});










Route::get('onlyhome/inicio', function () {
    return view('tienda.index');
})->name('tiendaVirtual.index');

Route::get('onlyhome/categoria', function () {
    return view('tienda.categoria');
})->name('tiendaVirtual.categoria');


Route::get('onlyhome/carrito', function () {
    return view('tienda.carrito');
})->name('tiendaVirtual.carrito');

Route::get('onlyhome/iniciarsesion', function () {
    return view('tienda.iniciarSesion');
})->name('tiendaVirtual.iniciarsesion');

Route::get('onlyhome/pasarela', function () {
    return view('tienda.pasarela');
})->name('tiendaVirtual.pasarela');

Route::get('onlyhome/pedido', function () {
    return view('tienda.pedido');
})->name('tiendaVirtual.pedido');

Route::get('onlyhome/registrarse', function () {
    return view('tienda.registrarse');
})->name('tiendaVirtual.registrarse');

Route::get('onlyhome/detalle', function () {
    return view('tienda.show');
})->name('tiendaVirtual.detalle');














