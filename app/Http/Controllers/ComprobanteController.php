<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprobanteController extends Controller
{
    public function index()
    {

        return view('comprobantes.index');
    }
}
