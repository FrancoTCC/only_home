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
    public function edit($cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function show( $cliente)
    {

        return view('clientes.show', compact('cliente'));
    }
   
    public function store()
    {
        return "Estoy creando";
    }
    public function update($cliente)
    {
        return "Estoy actualizando";
    }
    public function delete($cliente)
    {
        return "Estoy eliminando ";
    }
}



