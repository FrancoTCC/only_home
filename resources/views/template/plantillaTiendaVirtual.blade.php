<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>

    <header>
        <nav>

            <ul>
                <li class="logo"><a href="{{ route('tiendaOnline.index') }}">Only Home</a></li>
                <li><a href="{{ route('tiendaOnline.categoria') }}">Categoria</a></li>
                <li class="buscador"><input type="text" placeholder="Buscar"></li>
                <li><a href="{{ route('tiendaOnline.pedidos') }}">Mis pedidos</a></li>
                <li><a href="{{ route('tiendaOnline.carrito') }}">Carrito</a></li>
                <li><a href="{{ route('tiendaOnline.iniciarsesion') }}">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <div class="contenido">
        @yield('contenido')
    </div>
    </div>






    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            text-align: center;
        }

        .logo {
            font-size: 25px;
        }

        nav {
            display: flex;

            background-color: #ffcc44;
            height: 60px;
        }

        ul {
            display: flex;
            width: 100%;
            height: 60px;
            justify-content: space-around;
            align-items: center;
        }

        .buscador input {
            height: 35px;
            width: 400px;
            border-radius: 10px;
            border: solid rgb(248, 203, 0) 2px;
            text-align: center;
        }





        .contenido{
            margin: 25px;
        }
    </style>


</body>
