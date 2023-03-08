<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidos;

class PedidosController extends Controller
{

    public function getPedidos()
    {
        return response()->json(pedidos::all(), 200);
    }
    
    public function getPedidoId($id)
    {
        $pedido = pedidos::find($id);
        if (is_null($pedido)) {
            return response()->json(["message" => "Registro no encontrado"], 404);
        }
        return response()->json($pedido, 200);
    }

    public function insertPedidos(Request $request)
    {
        $pedido = pedidos::create($request->all());

        if (is_null($pedido)) {
            return response()->json(["message" => "No se registro el producto"], 404);
        }

        return response()->json($pedido, 200);
    }
}
