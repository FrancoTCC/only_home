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
                <li class="logo"><a href="{{ route('tiendaVirtual.index') }}">Only Home</a></li>
                <li><a href="{{ route('tiendaVirtual.categoria') }}">Categoria</a></li>
                <li class="buscador"><input type="text" placeholder="Buscar"></li>
                <li><a href="{{ route('tiendaVirtual.pedido') }}">Mis pedidos</a></li>
                <li><a href="{{ route('tiendaVirtual.carrito') }}">Carrito</a></li>
                <li><a href="{{ route('tiendaVirtual.iniciarsesion') }}">Iniciar Sesión</a></li>
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


        .promocion {
            display: flex;
            background-color: black;
            color: white;
            justify-content: center;
            align-items: center;
            height: 25px;
        }

        .paner {
            height: 500px;
            margin: 0 20px;
        }

        .paner img {
            width: 100%;
            height: 500px;

        }

        .productos h2 {
            margin: 35px 15px;
        }

        .productos-promociones {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            justify-content: center;

        }

        .productos-promociones-1 {
            background-color: rgb(216, 216, 216);
            border-radius: 10px;
            height: 280px;
            width: 250px;
            text-align: center;
            line-height: 25px;
            position: relative;

        }


        .descuento-producto {
            position: absolute;
            background-color: rgb(112, 112, 112);
            color: white;
            top: 15px;
            right: 0;
            padding: 2px;
        }

        .descuento-tachado {
            text-decoration: line-through;
            display: inline;
            margin-right: 50px;
            color: rgb(201, 0, 0);
        }

        .descuento-sin-tachado {
            display: inline;
        }

        .productos-promociones img {
            height: 150px;
        }


        .productos-promociones-1 button {
            background-color: rgb(228, 184, 42);
            border-radius: 5px;
            border: none;
            height: 30px;
            width: 200px;
            text-align: center;
            margin-top: 12px;
        }

        .productos-promociones-1 button:hover {
            background-color: rgb(204, 167, 45);
            height: 32px;
            width: 205px;


        }




        .contenido{
            margin: 25px;
        }
    </style>


</body>
