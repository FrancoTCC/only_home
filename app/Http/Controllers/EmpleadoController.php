<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {

        return view('empleados.index');
    }

    public function create()
    {
        return view('empleados.create');
    }
    public function edit($empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    public function show($empleado)
    {

        return view('empleados.show', compact('empleado'));
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function update($empleado)
    {
        return "Estoy actualizando";
    }
    public function delete($empleado)
    {
        return "Estoy eliminando ";
    }
}
