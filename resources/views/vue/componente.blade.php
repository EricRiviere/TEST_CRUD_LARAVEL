<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="app" class="container my-4">
    <div class="row g-3">
        <!-- Tarjetas de productos -->
        <producto-tarjeta 
            v-for="producto in productos" 
            :key="producto.id" 
            :producto="producto">
        </producto-tarjeta>
    </div>
</div>

<!-- Vue.js -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script>
    Vue.component('producto-tarjeta', {
        props: ['producto'],
        template: `
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://picsum.photos/500/300" class="card-img-top" alt="Imagen de producto">
                    <div class="card-body">
                        <h5 class="card-title">@{{ producto.name }}</h5>
                        <p class="card-text">@{{ producto.description }}</p>
                        <p class="card-text"><strong>Precio:</strong> @{{ producto.price }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary">Ver más</button>
                        <button class="btn btn-secondary">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        `
    });

    new Vue({
        el: '#app',
        data: {
            productos: [
                { id: 1, name: 'Casa A', description: 'Bonita casa con jardín.', price: 150000 },
                { id: 2, name: 'Piso B', description: 'Piso céntrico y luminoso.', price: 120000 },
                { id: 3, name: 'Casa C', description: 'Espaciosa casa en las afueras.', price: 180000 }
            ]
        }
    });
</script>
</body>
</html>
