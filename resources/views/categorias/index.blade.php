@extends('template.plantilla')

@section('titulo', 'Categorias')
@section('contenido')

    <h2>Tabla de Categorias</h2>
    <button><a href="{{ route('categorias.create') }}">Crear Categorias</a></button> <br><br>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Caracteristicas</th>
                    <th colspan="3">Detalles</th>

                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection
