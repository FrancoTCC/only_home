<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function index()
    {


        return view('tienda.descuentos.index');
    }


    public function create()
    {
        return view('tienda.descuentos.create');
    }
    public function edit($descuento)
    {
        return view('tienda.descuentos.edit', compact('descuento'));
    }

    public function show($descuento)
    {

        return view('tienda.descuentos.show', compact('descuento'));
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function update($descuento)
    {
        return "Estoy actualizando";
    }
    public function delete($descuento)
    {
        return "Estoy eliminando ";
    }
}
