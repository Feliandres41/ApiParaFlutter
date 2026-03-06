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
}
