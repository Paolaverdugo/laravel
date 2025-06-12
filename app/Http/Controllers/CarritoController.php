<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Carrito;
use App\Models\CarritoProducto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function agregar($id)
    {
        $producto = Producto::findOrFail($id); //buscar producto por ID

        // Obtener carrito de la sesión
        $carritoId = session('carrito_id');
//si el carritoID se encuentra en la base de datos se carga,sino se crea
        if ($carritoId) {
            $carrito = Carrito::find($carritoId);
            if (! $carrito) {
                $carrito = Carrito::create();
                session(['carrito_id' => $carrito->id]);
            }
        } else {   //crea el carrito en la BD
            $carrito = Carrito::create();
            session(['carrito_id' => $carrito->id]);
        }

  // Buscar si ya existe el producto en este carrito,first sirve para ver si ya existia ese producto
        $registro = CarritoProducto::where('carrito_id', $carrito->id)
                                   ->where('producto_id', $producto->id)
                                   ->first();

//si el registro existe la cantidad aumenta a 1, si no existe lo crea con cantidad 1
        if ($registro) {
            $registro->cantidad += 1;
            $registro->save();
        } else {
            CarritoProducto::create([
                'carrito_id' => $carrito->id,
                'producto_id' => $producto->id,
                'cantidad' => 1
            ]);
        }

  // Actualizamos la sesión que se visualizara,en caso de que exista se actualiza
        $carritoSession = session()->get('carrito', []);
        if (isset($carritoSession[$id])) {
            $carritoSession[$id]['cantidad']++;
        } else {
            $carritoSession[$id] = [
                'nombre'      => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio'      => $producto->precio,
                'imagen'      => $producto->imagen,
                'cantidad'    => 1
            ];
        }
        session(['carrito' => $carritoSession]);

        return back()->with('success', 'Producto añadido al carrito.');
    }



    public function mostrarCarrito()
    {
        $carrito = session('carrito', []);
        return view('carrito', compact('carrito'));
    }



    public function eliminar($producto_id)
    {
        //  Eliminar de la sesión
        $carrito = session('carrito', []);
        unset($carrito[$producto_id]); //elimina el producto con ese ID
        session(['carrito' => $carrito]);

        //  Eliminar de la BD
        $carritoId = session('carrito_id');
        if ($carritoId) {
            CarritoProducto::where('carrito_id', $carritoId)
                       ->where('producto_id', $producto_id)
                       ->delete();
        }

        return redirect()->route('mostrarcarrito');
    }



    public function actualizar(Request $request)
    {
//se cogen lso datos enviados por el formulario de editar
        $producto_id = $request->input('id');
        $accion = $request->input('accion');

        $carrito = session('carrito', []);
        $carritoId = session('carrito_id');

//verifica si el producto existe en el carrito
        if (isset($carrito[$producto_id])) {
            if ($accion === 'incrementar') {
                $carrito[$producto_id]['cantidad']++;
            } elseif ($accion === 'decrementar') {
                $carrito[$producto_id]['cantidad']--;
                if ($carrito[$producto_id]['cantidad'] <= 0) {
                    unset($carrito[$producto_id]);
                }
            }

            session(['carrito' => $carrito]);

//actualiza el carrito en la BD
            if ($carritoId) {
                $registro = CarritoProducto::where('carrito_id', $carritoId)
                                           ->where('producto_id', $producto_id)
                                           ->first(); //devuelve el primer resultado
//actualiza la cantidad en la BD, si existe ese producto se suma sino se pone a 1

                if ($registro) {
                    if (isset($carrito[$producto_id])) {
                        $registro->cantidad = $carrito[$producto_id]['cantidad'];
                        $registro->save();
                    } else {
                        $registro->delete();
                    }
                }
            }
        }

        return redirect()->route('mostrarcarrito');
    }
}
