<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="my-4">{{ $product->name }}</h1>

        <div class="row">
            <div class="col-md-6">
                <!-- Foto aleatoria del producto -->
                <img src="{{ $randomImage }}" alt="Imagen del producto" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>Descripción</h3>
                <p>{{ $product->description }}</p>
                <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Volver a la lista</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
