<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Guardar información (POST)
    public function store(Request $request)
    {
        // dd($request->all());
        $contacto = Contacto::create($request->all());

        return response()->json([
            "message" => "Guardado correctamente",
            "data" => $contacto
        ], 201);
    }

    // Mostrar TODOS los registros (GET)
    public function index()
    {
        return response()->json(Contacto::all());
    }

    
    public function destroy($id)
    {
        $contacto = Contacto::find($id);

        if(!$contacto){
            return response()->json([
                "mensaje" => "Contacto no encontrado"
            ],404);
        }

        $contacto->delete();

        return response()->json([
            "mensaje" => "Contacto eliminado correctamente"
        ],200);
    }
    public function update(Request $request, $id)
    {
        $contacto = Contacto::find($id);

        if (!$contacto) {
            return response()->json([
                "message" => "Contacto no encontrado"
            ], 404);
        }

        $contacto->nombre = $request->nombre;
        $contacto->numero = $request->numero;
        $contacto->save();

        return response()->json([
            "message" => "Contacto actualizado",
            "data" => $contacto
        ], 200);
    }
}
