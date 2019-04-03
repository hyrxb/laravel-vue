<template>
    <div>
        <p v-text="msg"></p>
        <!--<p v-clock>{{msg}}</p>-->
        <p v-text="msg2"></p>
        <p>{{msg2}}</p>
        <p v-html="msg2"></p>

        <input type="button" value="按钮" v-bind:title="myTitle">
        <!--简写　：title-->
        <input type="button" value="按钮1" :title="myTitle">

        <!--事件-->

        <input type="button" value="按钮点击" v-on:click="show">
        <input type="button" value="点击" v-on:mouseover="show">


    </div>
</template>


<script>

    export default{
        data(){
            return {
                msg:'123',
                msg2:'<h1>我是一个大大的H1</h1>',
                myTitle:'这是自己定义的title'
            }
        },
        methods:{ //定义Vue实例所有可用的方法
            show(){
                alert(111);
            }

        }
    }
</script>