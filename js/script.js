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
            axios.get('../php-todo-list-json/server.php').then((res)=>{
                this.myData = res.data;
                console.log(this.myData);
            })
        },
        sendData(){
            const data = {
                text: this.newTodoText
            }

            axios.post('../php-todo-list-json/server.php', data, {headers:{'Content-Type': 'multipart/form-data'}}).then((res)=>{
                this.newTodoText = '';
                this.getData();
            })
        }
    },
    created(){
        this.getData();
    }
}).mount('#app')