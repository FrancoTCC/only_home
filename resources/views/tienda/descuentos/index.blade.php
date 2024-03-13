@extends('template.plantilla')

@section('titulo', 'descuentos')
@section('contenido')
    <h2>Descuentos</h2>
    
    <button><a href="{{ route('tiendaDescuentos.create') }}">Crear Descuentos</a></button>


@endsection