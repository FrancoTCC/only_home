<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {


        return view('tienda.servicios.index');
    }


    public function create()
    {
        return view('tienda.servicios.create');
    }
    public function edit($servicio)
    {
        return view('tienda.servicios.edit', compact('servicio'));
    }

    public function show($servicio)
    {

        return view('tienda.servicios.show', compact('servicio'));
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function update($servicio)
    {
        return "Estoy actualizando";
    }
    public function delete($servicio)
    {
        return "Estoy eliminando ";
    }
}
