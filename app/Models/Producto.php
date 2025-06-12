<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	use HasFactory;

	protected $fillable = [
    	'nombre',
    	'precio',
    	'descripcion',
    	'categoria_id',
    	'imagen',
	];

public function categoria()
{
	return $this->belongsTo(Categoria::class);
}

  public function carritos()
    {
        return $this->belongsToMany(Carrito::class, 'carrito_producto')
                    ->withPivot('cantidad')
                    ->withTimestamps();
    }
}
