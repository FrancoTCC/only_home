<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {

        return view('proveedores.index');
    }

    public function create()
    {
        return view('proveedores.create');
    }
    public function edit($proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    public function show($proveedor)
    {

        return view('proveedores.show', compact('proveedor'));
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function update($proveedor)
    {
        return "Estoy actualizando";
    }
    public function delete($proveedor)
    {
        return "Estoy eliminando ";
    }
}
