<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Crear una columna id autoincremental
            $table->string('name'); // Nombre del producto
            $table->text('description'); // Descripción del producto
            $table->decimal('price', 8, 2); // Precio del producto con dos decimales
            $table->integer('stock'); // Cantidad de stock
            $table->timestamps(); // Para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
