<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ComentarioController;


Route::post('agregar/{id}', [CarritoController::class, 'agregar'])->name('agregar');
Route::get('/carrito', [CarritoController::class, 'mostrarcarrito'])->name('mostrarcarrito');
Route::delete('/carrito/{clave}', [CarritoController::class, 'eliminar'])->name('eliminar');
Route::post('actualizar', [CarritoController::class, 'actualizar'])->name('actualizar');
Route::delete('/carrito/{clave}', [CarritoController::class, 'eliminar'])->name('eliminar');




// Rutas estáticas
Route::get('/informacion', function () {
	return view('informacion'); // Muestra la página de información
})->name('informacion');


Route::get('/contacto', function () {
	return view('contacto'); // Muestra la página de contacto
})->name('contacto');

Route::get('/productos', function () {
	return view('productos'); // Muestra la página de productos
});

// Ruta para la página de inicio
Route::get('/', function () {
	return view('welcome'); // Muestra la página de inicio
});


// Formulario para añadir un producto (vista: productos_almacenamiento.blade.php)
Route::get('/categoria/productos_almacenamiento', [ProductoController::class, 'formularioNuevo'])->name('productos_almacenamiento');

Route::post('/categoria/guardar-desde-almacenamiento', [ProductoController::class, 'guardarDesdeAlmacenamiento'])->name('guardarDesdeAlmacenamiento');

Route::get('categoria/{nombre}', [CategoriaController::class, 'mostrar'])->name('categoria');



// Formulario para añadir un producto (vista: productos_portatiles.blade.php)
Route::get('productos_portatiles', [ProductoController::class, 'formularioPortatiles'])->name('productos_portatiles');

Route::post('/categoria/guardar-desde-portatiles', [ProductoController::class, 'guardarDesdePortatiles'])->name('guardarDesdePortatiles');

Route::get('categoria/{nombre}', [CategoriaController::class, 'mostrar'])->name('categoria');



// Formulario para añadir un producto (vista: productos_smartphones.blade.php)
Route::get('productos_smartphones', [ProductoController::class, 'formularioSmartphones'])->name('productos_smartphones');

Route::post('/categoria/guardar-desde-smartphones', [ProductoController::class, 'guardarDesdeSmartphones'])->name('guardarDesdeSmartphones');

Route::get('categoria/{nombre}', [CategoriaController::class, 'mostrar'])->name('categoria');



// Formulario para añadir un producto (vista: productos_ordenadores.blade.php)
Route::get('productos_ordenadores', [ProductoController::class, 'formularioOrdenadores'])->name('productos_ordenadores');

Route::post('/categoria/guardar-desde-ordenadores', [ProductoController::class, 'guardarDesdeOrdenadores'])->name('guardarDesdeOrdenadores');

Route::get('categoria/{nombre}', [CategoriaController::class, 'mostrar'])->name('categoria');


// Formulario para añadir un producto (vista: productos_perifericos.blade.php)
Route::get('productos_perifericos', [ProductoController::class, 'formularioPerifericos'])->name('productos_perifericos');

Route::post('/categoria/guardar-desde-perifericos', [ProductoController::class, 'guardarDesdePerifericos'])->name('guardarDesdePerifericos');

Route::get('categoria/{nombre}', [CategoriaController::class, 'mostrar'])->name('categoria');



// Rutas para gestionar productos en el momento de crearlos, elimianrlso etc
Route::get('/gestionar-productos', [ProductoController::class, 'gestionarProductos'])->name('gestionar-productos');
Route::get('/añadir', [ProductoController::class, 'create'])->name('create');
Route::get('/listar', [ProductoController::class, 'index'])->name('index');
Route::delete('/eliminar/{id}', [ProductoController::class, 'destroy'])->name('destroy');
Route::post('productos', [ProductoController::class, 'store'])->name('store');


// Definir las categorias categorias
Route::get('categoria/{nombre}', [CategoriaController::class, 'mostrar'])->name('categoria');



//comentario de pagina welcome

Route::post('/comentario', [ComentarioController::class, 'guardar'])->name('comentario');



//editar productos
Route::get('/productos/{id}/editar', [ProductoController::class, 'edit'])->name('edit');
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('update');





