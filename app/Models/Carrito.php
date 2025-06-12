<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carritos';


public function productos()
    {
 return $this->belongsToMany(Producto::class, 'carrito_producto')
                ->withPivot('cantidad')
                ->withTimestamps();
    }

}
