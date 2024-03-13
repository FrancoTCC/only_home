@extends('template.plantilla')

@section('titulo', 'servicios')
@section('contenido')
    <h2>Servicios </h2>

    <button><a href="{{ route('tiendaServicios.create') }}">Crear Servicios</a></button>
    

@endsection