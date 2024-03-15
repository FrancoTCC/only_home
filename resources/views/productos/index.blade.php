@extends('template.plantilla')

@section('titulo', 'productos')
@section('contenido')
    <h2>Tabla de Productos</h2>
    <button><a href="{{ route('productos.create') }}">Crear productos</a></button> <br><br>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th colspan="3">Detalles</th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection

























<style>
    th {
        background-color: #ffcc44
    }

    table,
    td,
    th {
        border: solid #ffcc00 2px;
        border-collapse: collapse;
        text-align: center;
    }

    table {
        width: 900px;
    }

    .tabla {
        display: flex;
        justify-content: center;

    }
</style>
