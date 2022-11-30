<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <div>
            <input type="text" name="newToDo" id="newToDo" placeholder="insert new task">
        </div>
        <button @click="getData">INVIA</button>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>