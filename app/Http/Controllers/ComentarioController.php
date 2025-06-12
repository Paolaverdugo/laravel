<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{


public function guardar(Request $request)
{


    $request->validate([
        'nombre' => 'required|string|min:3|max:255',
        'comentario' => 'required|string|min:5|max:1000',
    ]);

    Comentario::create([
        'nombre' => $request->nombre,
        'comentario' => $request->comentario,
    ]);

return redirect()->back()->with('success', '¡Comentario enviado correctamente!');

}

}

