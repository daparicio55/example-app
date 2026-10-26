<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get();
        return view('clientes.index',compact('clientes'));
    }
    public function create()
    {
        return "aca va ir la vista para crear un cliente";
    }
}
