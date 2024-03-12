<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {

        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }
    public function update()
    {
        return view('empleados.update');
    }

    public function show($empleados)
    {

        return view('empleados.show');
    }

    public function store()
    {
        return "Estoy creando";
    }
    public function edit($empleado)
    {
        return "Estoy actualizando";
    }
    public function delete($empleado)
    {
        return "Estoy eliminando ";
    }
}
