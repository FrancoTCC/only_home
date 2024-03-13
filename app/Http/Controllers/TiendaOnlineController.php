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






}
