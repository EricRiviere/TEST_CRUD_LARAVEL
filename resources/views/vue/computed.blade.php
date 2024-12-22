<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computed</title>
</head>
<body>
<div id="app">
    <label>Temperatura en Celsius:</label>
    <input type="number" v-model="celsius">
    <p>Equivalente en Fahrenheit: @{{ fahrenheit }}</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            celsius: 0
        },
        computed: {
            fahrenheit() {
                return (this.celsius * 9/5) + 32;
            }
        }
    });
</script>
