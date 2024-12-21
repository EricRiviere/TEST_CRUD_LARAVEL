@extends('layouts.app')

@section('content')
    <h1>Lista de productos</h1>

    @if ($products->isEmpty())
        <p>No hay productos disponibles.</p>
    @else
        <table style="width:100%; border-collapse:collapse; margin-top:20px;" border="1">
            <thead>
                <tr>
                    <th style="padding: 10px; text-align: left;">Nombre</th>
                    <th style="padding: 10px; text-align: left;">Descripción</th>
                    <th style="padding: 10px; text-align: right;">Precio</th>
                    <th style="padding: 10px; text-align: right;">Stock</th>
                    <th style="padding: 10px; text-align: center;">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td style="padding: 10px;">{{ $product->name }}</td>
                        <td style="padding: 10px;">{{ $product->description }}</td>
                        <td style="padding: 10px; text-align: right;">${{ number_format($product->price, 2) }}</td>
                        <td style="padding: 10px; text-align: right;">{{ $product->stock }}</td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="{{ route('products.show', $product->id) }}">Ver</a> |
                            <a href="{{ route('products.edit', $product->id) }}">Editar</a> |
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este producto?')" style="background:none; border:none; color:red; cursor:pointer;">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
