<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Obtén todos los productos desde la base de datos
        //dd($products); // Esto detendrá la ejecución y mostrará los datos
        return view('products.index', compact('products')); // Envía los productos a la vista
    }

    public function show($id)
    {
        $product = Product::find($id);

        // Verifica si el producto existe, si no, redirige o muestra un error
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Producto no encontrado');
        }

        // URL de una imagen aleatoria de un servicio externo
        $randomImage = 'https://picsum.photos/500/300';

        return view('products.show', compact('product', 'randomImage'));
    }

    // Mostrar formulario para agregar un producto
    public function create()
    {
        return view('products.create');
    }

    // Almacenar un nuevo producto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito');
    }

    // Mostrar formulario para editar un producto
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    // Actualizar un producto en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Producto actualizado con éxito');
    }

    // Eliminar un producto de la base de datos
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado con éxito');
    }

}

