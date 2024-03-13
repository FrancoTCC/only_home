@extends('template.plantillaTiendaVirtual')

@section('titulo', 'iniar Sesion')
@section('contenido')
    <h2>Carrito de Compras </h2>


    <button><a href="{{ route('tiendaOnline.iniciarsesion') }}">Pagar</a></button>
 



@endsection