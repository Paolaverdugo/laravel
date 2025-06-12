<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('precio', 8, 2);
            $table->text('descripcion');
            $table->timestamps();
	  $table->string('imagen')->nullable();
$table->foreignId('carrito_id')->nullable()->constrained('carritos')->onDelete('cascade');
//crea la columna ID que puede ser nula y en caso de que se elimine ese carrito se borra los registros
//relacionados con ese carrito


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
