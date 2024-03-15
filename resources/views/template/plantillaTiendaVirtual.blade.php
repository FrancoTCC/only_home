<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tiendaOnline.css') }}">


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

    <footer>
        <div class="footer">
            <div class="logo">
                <h3>Only Home</h3>
            </div>
            <div class="nosotros">
                <h3>Nosotros</h3>
                <a class="a-footer" href="{{ route('tiendaOnline.nosotros') }}">Nosotros</a>
                <h3>Politicas</h3>
                <a class="a-footer" href="{{ route('tiendaOnline.politicas') }}">Politicas</a>
            </div>
            <div class="horario">
                <h3>Horario de Antension</h3>
                <p>lunes a sabado</p>
                <p>07.00 /20.00</p>
                <p>Domingo: 08.00 /18.00</p>
            </div>
            <div class="contactos">
                <h3>Contactos</h3>
                <p>Telefono: 968562314</p>
                <p>Telefono: 966262314</p>
                <p>Correo: onlyhome@xx.com.pe</p>
            </div>
            <div class="libro">
                <h3>Libro de Reclmaciones</h3>
                <a class="a-footer" href="{{ route('tiendaOnline.libroreclamaciones') }}">Libro</a>
            </div>
            <div class="redes">
                <h3>Redes Sociales</h3>
                <a class="a-footer" href="https://web.facebook.com">Facebook</a>
                <a class="a-footer" href="">Instagram</a>
                <a class="a-footer" href="">Whatsapp</a>

            </div>
            <div class="suscribirse">
                <form action="">
                    <label for="">
                        <input class="input" type="email" placeholder="Correo Electronico">
                        <input class="btn" type="submit" value="Suscribirse">
                    </label>
                </form>
            </div>

        </div>
        <div class="copi">
            <p>copyring: xxx</p>
        </div>
    </footer>







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





        .contenido {
            margin: 25px;
            position: relative;
        }
    </style>


</body>
