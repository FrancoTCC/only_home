@extends('template.plantillaTiendaVirtual')

@section('titulo', 'carrito')
@section('contenido')

    <section class="container-caja">
        <h2 class="subtitulo">Carrito de Compras</h2>
        <button><a href="{{ route('tiendaOnline.iniciarsesion') }}">Pagar</a></button>
    </section>
 


@endsection