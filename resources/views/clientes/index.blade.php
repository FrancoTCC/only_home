@extends('template.plantilla')

@section('titulo', 'clientes')
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
                @foreach ($clientes as $cliente)
                    <tr>

                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellidoPat }} {{ $cliente->apellidoMat }}</td>
                        <td>{{ $cliente->celular }}</td>
                        <td style="width: 280px"><button class="btn-table"><a href="{{ route('clientes.show', $cliente) }}">Ver Más</a></button>
                            <button class="btn-table"><a href="{{ route('clientes.update', $cliente) }}">Actualizar</a></button>
                            <button class="btn-table"><a href="">Eliminar</a></button>
                        </td>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
