@extends('template.plantilla')

@section('titulo', 'Proveedor')
@section('contenido')

    <h2>Tabla de Proveedores</h2>
    <button><a href="{{ route('proveedores.create') }}">Crear Proveedor</a></button> <br><br>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th colspan="3">Detalles</th>

                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection
