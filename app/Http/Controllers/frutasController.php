<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\frutas;
use Illuminate\Support\Facades\DB;

class frutasController extends Controller

{
    public function getFrutas()
    {
        return response()->json(frutas::all(), 200);
    }
    public function getFrutaId($id)
    {
        $fruta = frutas::find($id);
        if (is_null($fruta)) {
            return response()->json(["message" => "Registro no encontrado"], 404);
        }
        return response()->json($fruta, 200);
    }

    public function insertFruta(Request $request)
    {
        $fruta = frutas::create($request->all());
        if (is_null($fruta)) {
            return response()->json(["message" => "No se registro el producto"], 404);
        }
        return response()->json($fruta, 200);
    }

    public function updateFruta(Request $request, $id)
    {
    
        $fruta = frutas::find($id);
        if (!$fruta) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        $fruta->update($request->all());

        return response()->json($fruta, 200);
    }

    public function deleteFruta($id)
    {
        $Fruta = frutas::find($id);
        if (is_null($Fruta)) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }
        $Fruta->delete();
        return response()->json(['message' => 'Registro Eliminado'], 200);
    }
}
