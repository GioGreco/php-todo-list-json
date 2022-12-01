"use strict";

const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            newTodoText: '',
            myData: []
        }
    },
    methods: {
        getData(){
            axios.get('./server.php/').then((res)=>{
                this.myData = res.data;
                console.log(this.myData);
            })
        },
        sendData(){
            const data = {
                newTodoText: this.newTodoText
            }

            axios.post('./server.php/', data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res)=>{
                console.log(res.data);
                this.newTodoText = '';
                this.getData();
            })
        },
        toggleTodo(index){
            // console.log(index)

            const todoFormData = {
                toggleTodoIndex: index,
            }

            axios.post('./server.php/', todoFormData, {headers: {'Content-Type': 'multipart/form-data'}}).then((res)=>{
                console.log(res.data);
            })

            this.getData();
        },
        deleteTodo(index){
            // console.log(index);

            const todoFormData = {
                deleteTodoIndex : index
            }

            axios.post('./server.php/', todoFormData, {headers: {'Content-Type': 'multipart/form-data'}}).then((res)=>{
                console.log(res.data);
            })

            this.getData();
        }
    },
    mounted(){
        this.getData();
    }
}).mount('#app')