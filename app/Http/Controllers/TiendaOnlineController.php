<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaOnlineController extends Controller
{
    public function index()
    {

        return view('tiendaonline.index');
    }
    public function categoria()
    {

        return view('tiendaonline.categoria');
    }
    public function carrito()
    {

        return view('tiendaonline.carrito');
    }
    public function iniciarsesion()
    {

        return view('tiendaonline.iniciarsesion');
    }
    public function registrarse()
    {

        return view('tiendaonline.registrarse');
    }
    public function pasarela()
    {

        return view('tiendaonline.pasarela');
    }
    public function pedidos()
    {

        return view('tiendaonline.pedido');
    }
    public function servicios()
    {

        return view('tiendaonline.servicios');
    }

    public function mejorescalificados()
    {

        return view('tiendaonline.mejorescalificados');
    }

    public function descuentos()
    {

        return view('tiendaonline.descuentos');
    }

    public function detalle()
    {

        return view('tiendaonline.detalle');
    }

    public function politicas()
    {

        return view('tiendaonline.politicas');
    }

    public function nosotros()
    {

        return view('tiendaonline.nosotros');
    }

    public function libroreclamaciones()
    {

        return view('tiendaonline.libroreclamaciones');
    }

    public function recuperarcontraseña()
    {

        return view('tiendaonline.recuperarcontrasena');
    }
    public function pedidosdetalles()
    {

        return view('tiendaonline.pedidodetalles');
    }




    

}
