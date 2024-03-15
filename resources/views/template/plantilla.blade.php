<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

</head>

<body>


    <div class="container">
        <div class="menu">
            <h2 class="logo">Only Home</h2>
            <h3><a href="{{ route('inicio.index') }}">Inicio</a></h3>
            <h3><a href="{{ route('clientes.index') }}">Clientes</a></h3>
            <h3><a href="{{ route('empleados.index') }}">Empleados</a></h3>
            <h3><a href="{{ route('productos.index') }}">Productos</a></h3>
            <h3><a href="{{ route('proveedores.index') }}">Proveedores</a></h3>
            <h3><a href="{{ route('categorias.index') }}">Categorias</a></h3>
            <h3><a href="{{ route('ventas.index') }}">Vender</a></h3>
            <h3><a href="{{ route('cajas.index') }}">Caja</a></h3>
            <h3><a href="{{ route('codificar.index') }}">Codificar</a></h3>
            <h3><a href="{{ route('estadisticas.index') }}">Graficos</a></h3>
            <h3><a href="{{ route('tienda.index') }}">Tienda</a></h3>
            <h3><a href="{{ route('pedidos.index') }}">Pedidos</a></h3>
            <h3><a href="{{ route('reportes.index') }}">Reportes</a></h3>
            <h3><a href="{{ route('comprobantes.index') }}">Comprobantes</a></h3>
            <h3><a href=""> </a></h3>
            <br><br><br>
            <h3><a href="{{ route('tiendaOnline.index') }}">Tienda Onlinee</a></h3>





        </div>
        <div class="contenido">
            @yield('contenido')
        </div>
    </div>
</body>

</html>
