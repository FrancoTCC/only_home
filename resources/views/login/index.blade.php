<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <title>Iniciar Sesion</title>
</head>

<body style="background-color: #222222">
    <div class="container">
        <div class="form">
            <form action="">
                <h2 class="titulo-form">Bienvenido</h2>
                <label for="">
                    Usuario
                    <input type="email">
                </label>
                <label for="">
                    Contraseña
                    <input type="password">
                </label>
                <button type="submit"><a href="{{ route('inicio.index') }}">Iniciar Sesion</a></button>
            </form>
        </div>
    </div>

</body>

</html>
