<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>List</title>
    </head>
    <body>
    <div id="app">
    <h2>Lista de tareas</h2>
    <input v-model="nuevaTarea" @keyup.enter="agregarTarea">
    <button @click="agregarTarea">Añadir</button>
    <ul>
        <li v-for="(tarea, index) in tareas" :key="index">
            @{{ tarea }} <button @click="eliminarTarea(index)">X</button>
        </li>
    </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            nuevaTarea: '',
            tareas: []
        },
        methods: {
            agregarTarea() {
                if (this.nuevaTarea.trim() !== '') {
                    this.tareas.push(this.nuevaTarea);
                    this.nuevaTarea = '';
                }
            },
            eliminarTarea(index) {
                this.tareas.splice(index, 1);
            }
        }
    });
</script>

    </body>
</html>