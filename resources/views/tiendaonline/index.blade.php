@extends('template.plantillaTiendaVirtual')

@section('titulo', 'inicio')
@section('contenido')



    <main>
        <article>
            <section class="container-caja">
                <h2 class="subtitulo">aquí va la cabecera de la pagina</h2>
            </section>
        </article>
        <article>
            <section class="container-caja">
                <h2 class="subtitulo"><a href="{{ route('tiendaOnline.descuentos') }}">Descuentos</a></h2>
                <div class="caja">
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                    </div>

                </div>
            </section>
        </article>
        <article>
            <section class="container-caja">
                <h2 class="subtitulo"><a href="{{ route('tiendaOnline.categoria') }}">Categorias</a></h2>
                <div class="caja">
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>

                </div>
            </section>
        </article>
        <article>
            <section class="container-caja">
                <h2 class="subtitulo"><a href="{{ route('tiendaOnline.mejorescalificados') }}">Mejores Calificados</a></h2>
                <div class="caja">
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>
                    <div class="caja-caja">

                        <button class="btn-ver-mas"><a href="{{ route('tiendaOnline.detalle') }}">Ver Más</a></button>
                        
                    </div>

                </div>
            </section>
        </article>
        <article>
            <section class="container-caja">
                <h2 class="subtitulo"><a href="{{ route('tiendaOnline.servicios') }}">Servicios</a></h2>
            </section>
        </article>


    </main>



   
    




@endsection
