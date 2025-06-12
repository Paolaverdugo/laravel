<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up(): void
{
    Schema::table('productos', function (Blueprint $table) {
        $table->dropForeign(['carrito_id']);
        $table->dropColumn('carrito_id');
    });
}

public function down(): void
{
    Schema::table('productos', function (Blueprint $table) {
        $table->foreignId('carrito_id')->nullable()->constrained('carritos')->onDelete('cascade');
    });
}

};
