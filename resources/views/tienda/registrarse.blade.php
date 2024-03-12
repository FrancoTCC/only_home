@extends('template.plantillaTiendaVirtual')

@section('titulo', 'iniar Sesion')
@section('contenido')

    <h2>Registrarse</h2>
     <button><a href="{{ route('tiendaVirtual.pasarela') }}">Registrarse</a></button>
 



@endsection