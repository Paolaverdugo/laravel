<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CategoriaController extends Controller
{
	public function mostrar($nombre)
	{
    	// Filtrar productos según el nombre de la categoría relacionada
    	$productos = Producto::whereHas('categoria', function ($query) use ($nombre) {
        	$query->where('nombre', $nombre);
    	})->get();

    	return view($nombre, compact('productos', 'nombre'));
	}
}

