<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {


        return view('productos.index');
    }

    public function create()
    {
        return view('productos.create');
    }
    public function edit($producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function show($producto)
    {

        return view('productos.show', compact('producto'));
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function update($producto)
    {
        return "Estoy actualizando";
    }
    public function delete($producto)
    {
        return "Estoy eliminando ";
    }
}
