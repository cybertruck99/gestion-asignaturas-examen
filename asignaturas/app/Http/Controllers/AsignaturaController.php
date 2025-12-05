<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    public function listar()
    {
        $asignaturas = Asignatura::all();
        return view('asignaturas.lista', compact('asignaturas'));
    }

    public function crear(Request $request)
    {
        Asignatura::create([
            'nombre' => $request->nombre,
            'nivel' => $request->nivel
        ]);

        return redirect('/asignaturas');
    }
}
