<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


public function up(): void
{
    Schema::table('productos', function (Blueprint $table) {
     $table->unsignedBigInteger('categoria_id')->nullable(); //crea la columna categoria_id en la tabla productos
     $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null'); //aparece null si no tiene categoria
    });
}

public function down(): void
{
    Schema::table('productos', function (Blueprint $table) {
        $table->dropForeign(['categoria_id']);
        $table->dropColumn('categoria_id');
    });
}
};
