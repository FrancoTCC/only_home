@extends('template.plantilla')

@section('titulo', 'titulo')
@section('contenido')
    <h2>GESTIONAR TIENDA ONLINE</h2>
    <button><a href="{{ route('tiendaProductos.index') }}">Productos</a></button>
    <button><a href="{{ route('tiendaDescuentos.index') }}">Descuentos</a></button>
    <button><a href="{{ route('tiendaServicios.index') }}">Servicios</a></button>


@endsection

