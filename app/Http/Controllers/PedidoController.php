<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedido.index', compact('pedidos'));
   
    }

    public function create()
    {
        
        $pedido->save();
        Return redirect()->route('pedido.index');
    }

    public function edit($id)
    {
        return view('pedido.edit',compact('id'));
    }
}


