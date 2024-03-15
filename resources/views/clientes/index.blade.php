@extends('template.plantilla')

@section('titulo', 'clientes')
@section('contenido')
   
    <h2>Tabla de Clientes</h2>
    <button><a href="{{ route('clientes.create') }}">Crear CLientes</a></button> <br><br>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th colspan="3">Detalles</th>

                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection
