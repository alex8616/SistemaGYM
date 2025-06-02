<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function Cliente()
    {
        return view('cliente.index');
    }

    public function Horario()
    {
        return view('cliente.horario');
    }

    public function Perfil()
    {
        return view('cliente.perfil');
    }

    public function Pagos()
    {
        return view('cliente.pagos');
    }
}
