<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


public function up()
{
    Schema::create('carrito_producto', function (Blueprint $table) {
        $table->id();
$table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
$table->foreign('carrito_id')->references('id')->on('carritos')->onDelete('cascade');

        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('carrito_producto');
    }
};
