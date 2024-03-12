@extends('template.plantillaTiendaVirtual')

@section('titulo', 'iniar Sesion')
@section('contenido')

    <h2>Iniciar Sesión</h2>
    <button><a href="{{ route('tiendaVirtual.registrarse') }}">Registrarse</a></button>




@endsection
