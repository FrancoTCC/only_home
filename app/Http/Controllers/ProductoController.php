<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {

        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }
    public function update()
    {
        return view('productos.update');
    }

    public function show($producto)
    {

        return view('productos.show');
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function edit($producto)
    {
        return "Estoy actualizando";
    }
    public function delete($producto)
    {
        return "Estoy eliminando ";
    }
}
