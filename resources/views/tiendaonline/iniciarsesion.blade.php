@extends('template.plantillaTiendaVirtual')

@section('titulo', 'iniar Sesion')
@section('contenido')

    <section class="container-caja">
        <div class="container">
            <div class="form">
                <form action="">
                    <h2 class="titulo-form">Iniciar Sesion</h2>
                    <label for="">
                        <p class="for-nombre">Usuario</p>
                        <input type="text">
                    </label>
                    <label for="">
                        <p class="for-nombre">Contraseña</p>
                        <input type="password">
                    </label>
                    <button type="submit"><a href="{{ route('tiendaOnline.pasarela') }}">Iniciar Sesion</a></button>
                    <a class="a" href="{{ route('tiendaOnline.recuperarcontraseña') }}">¿olvidaste tu Contraseña?</a>
                    <a class="a" href="{{ route('tiendaOnline.registrarse') }}">Registrarse</a>
                </form>
            </div>
        </div>



    </section>



@endsection




<style>
    .form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #1d1d1d;
        display: flex;
        width: 400px;
        justify-content: center;
        font-size: 18px;
        border-radius: 10px;
        border: solid #ffcc00 1px;
        color: #f8af10;
        padding: 10px;

    }

    .titulo-form {
        text-align: center;
        padding: 20px 0;
        font-size: 25px;
        color: #f8af10;

    }

    input {
        display: flex;
        height: 45px;
        width: 350px;
        margin: 4px 0;
        margin-bottom: 15px;
        padding: 10px;
        font-size: 20px;
        border-radius: 7px;
        border: solid #ffcc00 1px;
        

    }
    


    button {

        height: 45px;
        width: 350px;
        margin: 20px 0;
        border-radius: 7px;
        border: solid #ffcc00 1px;
        background-color: #f8af10;
        margin-bottom: 7px;




    }


    a {
        text-decoration: none;
        color: white;
        font-size: 18px;
    }

    .a {
        color: #f8af10;
        font-size: 15px;
        display: block;
    }

    .for-nombre {
        display: flex;
        justify-content: flex-start;
    }

</style>
