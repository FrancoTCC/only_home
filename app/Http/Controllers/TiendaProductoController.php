<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaProductoController extends Controller
{
    public function index()
    {

        
        return view('tienda.productos.index');
    }


    public function create()
    {
        return view('tienda.productos.create');
    }
    public function edit($producto)
    {
        return view('tienda.productos.edit', compact('producto'));
    }

    public function show($producto)
    {

        return view('tienda.productos.show', compact('producto'));
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
