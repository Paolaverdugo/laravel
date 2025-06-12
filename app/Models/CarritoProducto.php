<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarritoProducto extends Model
{
    protected $table = 'carrito_producto';

    protected $fillable = [
        'carrito_id',
        'producto_id',
        'cantidad',
    ];
}
