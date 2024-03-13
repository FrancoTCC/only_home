@extends('template.plantilla')

@section('titulo', 'productos')
@section('contenido')
    <h2>Productos</h2>
    
    <button><a href="{{ route('tiendaProductos.create') }}">Crear Productos</a></button>


@endsection