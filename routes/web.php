<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return "Hola Laravel";
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

use App\Http\Controllers\ProductController;

// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//Route::resource('products', ProductController::class);
//Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


// Lista de productos (debe ser GET)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Pagina de producto (GET)
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Crear producto (GET para el formulario)
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Almacenar producto (POST)
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Editar producto (GET para el formulario de edición)
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Actualizar producto (PUT)
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

// Eliminar producto (DELETE)
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
