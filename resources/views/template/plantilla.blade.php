<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>


    <div class="container">
        <div class="menu">
            <h2 class="logo">Only Home</h2>
            <h3><a href="">Inicio</a></h3>
            <h3><a href="{{ route('clientes.index') }}">Clientes</a></h3>
            <h3><a href="{{ route('empleados.index') }}">Empleados</a></h3>
            <h3><a href="{{ route('productos.index') }}">Productos</a></h3>
            <h3><a href="{{ route('ventas.index') }}">Vender</a></h3>
            <h3><a href="{{ route('cajas.index') }}">Caja</a></h3>
            <h3><a href="{{ route('codificar.index') }}">Codificar</a></h3>
            <h3><a href="{{ route('estadisticas.index') }}">Graficos</a></h3>
            <h3><a href="{{ route('tienda.index') }}">Tienda</a></h3>
            <h3><a href="{{ route('pedidos.index') }}">Pedidos</a></h3>
            <h3><a href="{{ route('reportes.index') }}">Reportes</a></h3>
            <h3><a href="{{ route('comprobantes.index') }}">Comprobantes</a></h3>
            <h3><a href=""> </a></h3>
            <br><br><br><br>
            <h3><a href="{{ route('tiendaOnline.index') }}">Tienda Onlinee</a></h3>





        </div>
        <div class="contenido">
            @yield('contenido')
        </div>
    </div>
</body>





<style>
    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        color: black;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        list-style: none;
    }

    .container {
        display: flex;
    }

    .menu {
        background-color: #ffcc44;
        height: 100vh;
        width: 15%;
        padding: 18px;
        line-height: 32px;
        font-size: 20px;
    }

    .contenido {
        background-color: rgb(228, 228, 228);
        height: 100vh;
        width: 85%;
        text-align: center;
        line-height: 60px;
        padding: 18px;

    }

    .logo {
        text-align: center;
        padding-bottom: 18px;
    }

    button {
        background-color: #ffcc44;
        height: 40px;
        width: 180px;
        border-radius: 5px;
        border: solid #f5bb1c 1px;
        font-size: 20px;
    }

    .btn-table {
        background-color: #f3fcdb;
        height: 30px;
        width: 65px;
        border-radius: 5px;
        border: solid #ffcc44 1px;
        font-size: 16px;
        margin: 0 3px;



    }

    h2 {
        font-size: 25px;
    }
</style>


</html>
