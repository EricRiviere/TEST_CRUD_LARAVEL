<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Vue</title>
</head>
<body>
    <div id="app">
        @{{ message }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                message: '¡Hola, Vue.js!'
            }
        });
    </script>
</body>
</html>