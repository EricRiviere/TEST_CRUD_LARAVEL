<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
<div id="app">
    <p>Contador: @{{ contador }}</p>
    <button @click="incrementar">Incrementar</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            contador: 0
        },
        methods: {
            incrementar() {
                this.contador++;
            }
        }
    });
</script>
</body>
</html>

