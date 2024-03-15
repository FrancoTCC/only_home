@extends('template.plantilla')

@section('titulo', 'empleados')
@section('contenido')

    <h2>Tabla de empleados</h2>
    <button><a href="{{ route('empleados.create') }}">Crear Empleados</a></button> <br><br>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Cargo</th>
                    <th colspan="3">Detalles</th>

                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection
