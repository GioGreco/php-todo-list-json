<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="app">
        <div class="add">
            <input v-model="newTodoText" type="text" name="newTODO" id="newTODO" placeholder="insert new task">
            <button @click="sendData">INVIA</button>
        </div>
        

        <h2>LISTA TO-DO</h2>
        <ul>
            <li v-for="(todo, index) in myData" :key="index" :class="todo.done ? 'done' : ''">{{todo.text}}</li>
        </ul>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>