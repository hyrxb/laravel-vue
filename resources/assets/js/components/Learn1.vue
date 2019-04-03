<template>
<div>
    <!--<div class="inner" v-on:click="divHandler">-->
        <!--<input type="button" value="点击" v-on:stop="btnHander">-->
    <!--</div>-->

    <h4>{{msg}}</h4>


    <input type="text" style="width:100%" v-model="msg2" value="">
    <p>{{msg2}}</p>


    <input type="text" v-model="n1">
    <select v-model="opt">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" v-model="n2">
    <input type="button" value="=" v-on:click="calc">
    <input type="text" v-model="result" >

    <hr>

    <!--对象的形式-->
    <h1 v-bind:class="{red:isActive}">这是一个很大的h1,大到你无法想</h1>

    <!--数组的形式-->
    <h1 v-bind:class="['red','thin']">哈哈哈</h1>

    <h1 v-bind:style="{color:'red','font-weith':23}">aaaa</h1>


    <p v-for="(item, i) in list">{{i}} -- {{item}}</p>

    <p v-for="(item,i) in list2">{{item.id}}----{{item.name}}</p>

    <hr>


    id:<input type="text" v-model="id"><br>
    品牌名称：<input type="text" v-model="name"><br>
    添加时间:<input type="text" v-model="time"><br>
    <input type="button" value="添加" @click="add">

    <table class="table table-bordered table-hover">
    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>品牌名称</th>
    			<th>添加时间</th>
    			<th>操作</th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr v-for="item in list3">
    			<td>{{item.id}}</td>
    			<td>{{item.name}}</td>
    			<td>{{item.time}}</td>
    			<td><a href="" @click.prevent="del(item.id)">删除</a></td>
    		</tr>
    	</tbody>
    </table>

    <p>{{msg2|msgFormat}}</p>
</div>
</template>
<style>
    .red{
        color:red;
    }
    .thin{
        font-weight:200;
    }
    .italic{
        font-style:italic;
    }


</style>
<script>

    export default{
        //https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Array/some
        data(){
            return {
                msg:"大家好",
                msg2:"你好啊",
                n1:0,
                n2:0,
                result:0,
                opt:'+',
                isActive:false,
                list:[1,2,3,4,5,6,7,8],
                list2:[
                    {id:1,name:"zs1"},
                    {id:2,name:"zs2"},
                    {id:3,name:"zs3"},
                    {id:4,name:"zs4"}
                ],
                list3:[
                    {id:1,name:"宝马",time:"2017-03-01"},
                    {id:1,name:"宝马1",time:"2017-03-01"},
                    {id:1,name:"宝马2",time:"2017-03-01"},
                    {id:1,name:"宝马3",time:"2017-03-01"},
                    {id:1,name:"宝马4",time:"2017-03-01"}
                ],
                name:'',
                time:'',
                id:''
            }
        },
        methods:{
//            drrivHandler(){
//               console.log("出发inner div");
//            },
//            btnHander(){
//                console.log("button");
//            }

            calc(){
                switch(this.opt){
                    case "+":
                        this.result = parseInt(this.n1) + parseInt(this.n2);
                        break;
                    case "-":
                        this.result = parseInt(this.n1) -parseInt(this.n2);
                        break;
                    case "*":
                        this.result = parseInt(this.n1) * parseInt(this.n2);
                        break;
                    case "/":
                        this.result = parseInt(this.n1) / parseInt(this.n2);
                        break;
                }
                console.log(this.result);
            },
            add(){
//                console.log(this.name);

                this.list3.push({id:this.id,name:this.name,time:this.time})
            },
            del(id){
                //根据id 扎到索引
                this.list3.some((item,i)=>{
                    if(item.id == id){
                        this.list3.splice(i,1)
                        return true;
                    }
                });
            },
            search(keyword){
                var newlist=[];
                this.list3.forEach(item=>{
                    if(item.name.indexOf(keyword) != -1){
                        newlist.push(item);
                    }
                });
                return newlist;
            }

        }
    }


</script>