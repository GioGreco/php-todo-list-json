"use strict";

const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            myData: []
        }
    },
    methods: {
        getData(){
            axios.get('../php-todo-list-json/server.php').then((res)=>{
                // console.log(res.data);
                // const data = JSON.parse(res.data);
                this.myData = res.data;
                console.log(this.myData);
            })
        }
    },
    created(){
        this.getData();
    }
}).mount('#app')