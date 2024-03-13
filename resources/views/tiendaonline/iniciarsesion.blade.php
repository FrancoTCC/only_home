@extends('template.plantillaTiendaVirtual')

@section('titulo', 'iniar Sesion')
@section('contenido')

    <h2>Iniciar Sesión</h2>
    <button><a href="{{ route('tiendaOnline.registrarse') }}">Registrarse</a></button>




@endsection
