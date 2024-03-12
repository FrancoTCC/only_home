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
                @foreach ($empleados as $empleado)
                    <tr>

                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellidoPat }} {{ $empleados->apellidoMat }}</td>
                        <td>{{ $empleado->celular }}</td>
                        <td>{{ $empleado->cargo }}</td>
                        <td style="width: 280px"><button class="btn-table"><a href="{{ route('empleados.show', $cliente) }}">Ver Más</a></button>
                            <button class="btn-table"><a href="{{ route('empleados.update', $cliente) }}">Actualizar</a></button>
                            <button class="btn-table"><a href="">Eliminar</a></button>
                        </td>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
