<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {

        return view('categorias.index');
    }

    public function create()
    {
        return view('categorias.create');
    }
    public function edit($categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function show($categoria)
    {

        return view('categorias.show', compact('categoria'));
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function update($categoria)
    {
        return "Estoy actualizando";
    }
    public function delete($categoria)
    {
        return "Estoy eliminando ";
    }
}
