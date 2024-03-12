@extends('template.plantilla')

@section('titulo', 'empleados')
@section('contenido')
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
                @foreach ($productos as $producto)
                    <tr>

                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->categoria}}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td style="width: 280px"><button class="btn-table"><a href="{{ route('productos.show', $producto) }}">Ver Más</a></button>
                            <button class="btn-table"><a href="{{ route('productos.update', $producto) }}">Actualizar</a></button>
                            <button class="btn-table"><a href="">Eliminar</a></button>
                        </td>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
