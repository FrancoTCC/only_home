<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }
    
    public function create()
    {
        return view('clientes.create');
    }
    public function update()
    {
        return view('clientes.update');
    }

    public function show( $clientes)
    {

        return view('clientes.show');
    }
   
    public function store()
    {
        return "Estoy creando";
    }
    public function edit($cliente)
    {
        return "Estoy actualizando";
    }
    public function delete($cliente)
    {
        return "Estoy eliminando ";
    }
}



