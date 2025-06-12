<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

	public function index(Request $request)
	{
    $query = Producto::with('categoria');

    if ($request->filled('buscar')) {
        $query->where('nombre', 'like', '%' . $request->buscar . '%');
    }

    if ($request->filled('categoria')) {
        $query->where('categoria_id', $request->categoria);
    }

    $productos = $query->get();
    $categorias = \App\Models\Categoria::all(); // coge el modelo de categoria para el select

    return view('index', compact('productos', 'categorias'));
}




//funcion para mostrar formulario de crear productos
public function create()
{
	$categorias = Categoria::all();
	return view('create', compact('categorias'));
}



//funcion que guarda y añade los productos
public function store(Request $request)
{
	$rutaImagen = null;


	if ($request->hasFile('imagen')) {
    	$path = $request->file('imagen')->store('imagenes', 'public');
    	$rutaImagen = 'storage/' . $path;
	}


  $descripcionLimpia = strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>');
    $descripcionLimpia = html_entity_decode($descripcionLimpia);

	Producto::create([
    	'nombre' => $request->nombre,
	'descripcion' =>strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>'),
    	'precio' => $request->precio,
    	'categoria_id' => $request->categoria_id,
    	'imagen' => $rutaImagen,
	]);

	return redirect()->route('create')->with('success', 'Producto guardado correctamente');
}



//funcion para borrar productos por ID
public function destroy($id)
        {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('index')->with('success', 'Producto eliminado.');
        }






public function gestionarProductos()
	{
    	return view('gestionar-productos');
	}



public function formularioNuevo()
{
	return view('productos_almacenamiento');
}


// productos de almacenamiento

public function guardarDesdeAlmacenamiento(Request $request)

{
    // Validar los campos del formulario
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
	'descripcion' => 'nullable|string|min:5|max:255',
        'imagen' => 'nullable|image',
    ]);

    // Si hay imagen, la subimos y guardamos la ruta
    $rutaImagen = null;
    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('imagenes', 'public');
        $rutaImagen = 'storage/' . $rutaImagen;
    }

    // Crear el producto con los datos del formulario
    Producto::create([
        'nombre'       => $request->nombre,
	'descripcion' => strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>'),
        'precio'       => $request->precio,
        'categoria_id' => $request->categoria_id,
        'imagen'       => $rutaImagen,
    ]);

    // Volver atrás con un mensaje
    return back()->with('success', 'Producto guardado correctamente.');
}



//Productos de portatiles

public function guardarDesdePortatiles(Request $request)
{



    // Validar los campos del formulario
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
'descripcion' => 'nullable|string|min:5|max:255',
        'imagen' => 'nullable|image',
    ]);

    // Si hay imagen, la subimos y guardamos la ruta
    $rutaImagen = null;
    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('imagenes', 'public');
        $rutaImagen = 'storage/' . $rutaImagen;
    }


 // Crear el producto con los datos del formulario
    Producto::create([
        'nombre'       => $request->nombre,
        'precio'       => $request->precio,
	'descripcion' => strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>'),
        'categoria_id' => $request->categoria_id,
        'imagen'       => $rutaImagen,
    ]);

    // Volver atrás con un mensaje
    return back()->with('success', 'Producto guardado correctamente.');
}




public function formularioPortatiles()
{
    return view('productos_portatiles');
}



//productos de smartphones
public function guardarDesdeSmartphones(Request $request)
{
    // Validar los campos del formulario
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
'descripcion' => 'nullable|string|min:5|max:255',
        'imagen' => 'nullable|image',
    ]);

    // Si hay imagen, la subimos y guardamos la ruta
    $rutaImagen = null;
    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('imagenes', 'public');
        $rutaImagen = 'storage/' . $rutaImagen;
    }

    // Crear el producto con los datos del formulario
    Producto::create([
        'nombre'       => $request->nombre,
	'descripcion' => strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>'),
        'precio'       => $request->precio,
        'categoria_id' => $request->categoria_id,
        'imagen'       => $rutaImagen,
    ]);

    // Volver atrás con un mensaje
    return back()->with('success', 'Producto guardado correctamente.');
}




public function formularioSmartphones()
{
    return view('productos_smartphones');
}



//productos de ordenadores
public function GuardarDesdeOrdenadores(Request $request)
{

    // Validar los campos del formulario
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
'descripcion' => 'nullable|string|min:5|max:255',
        'imagen' => 'nullable|image',
    ]);

    // Si hay imagen, la subimos y guardamos la ruta
    $rutaImagen = null;
    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('imagenes', 'public');
        $rutaImagen = 'storage/' . $rutaImagen;
    }

    // Crear el producto con los datos del formulario
    Producto::create([
        'nombre'       => $request->nombre,
	'descripcion' => strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>'),
        'precio'       => $request->precio,
        'categoria_id' => $request->categoria_id,
        'imagen'       => $rutaImagen,
    ]);

    // Volver atrás con un mensaje
    return back()->with('success', 'Producto guardado correctamente.');
}



public function formularioOrdenadores()
{
    return view('productos_ordenadores');
}



//productos de perifericos
public function GuardarDesdePerifericos(Request $request)
{

    // Validar los campos del formulario
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
'descripcion' => 'nullable|string|min:5|max:255',
        'imagen' => 'nullable|image',
    ]);

    // Si hay imagen, la subimos y guardamos la ruta
    $rutaImagen = null;
    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('imagenes', 'public');
        $rutaImagen = 'storage/' . $rutaImagen;
    }

    // Crear el producto con los datos del formulario
    Producto::create([
        'nombre'       => $request->nombre,
	'descripcion' => strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>'),
        'precio'       => $request->precio,
        'categoria_id' => $request->categoria_id,
        'imagen'       => $rutaImagen,
    ]);

    // Volver atrás con un mensaje
    return back()->with('success', 'Producto guardado correctamente.');
}



public function formularioPerifericos()
{
    return view('productos_perifericos');
}



//editar productos
public function edit($id)
{
    $producto = Producto::findOrFail($id);
    $categorias = Categoria::all();
    return view('editar_producto', compact('producto', 'categorias'));
}





public function update(Request $request, $id)
{
    $producto = Producto::findOrFail($id);


    $request->validate([
        'nombre' => 'required|string|min:4|max:255',
        'precio' => 'required|numeric',
        'descripcion' => 'nullable|string|min:5|max:255',
        'imagen' => 'nullable|image',
        'categoria_id' => 'nullable|exists:categorias,id',
    ]);

    $producto->nombre = $request->nombre;
    $producto->precio = $request->precio;
    $producto->descripcion = strip_tags($request->descripcion, '<strong><b><ul><li><ol><em><br><p>');

    $producto->categoria_id = $request->categoria_id;

    if ($request->hasFile('imagen')) {
        $ruta = $request->file('imagen')->store('imagenes', 'public');
        $producto->imagen = 'storage/' . $ruta;
    }

    $producto->save();

    return redirect()->route('create')->with('success', 'Producto actualizado correctamente.');
}



}
