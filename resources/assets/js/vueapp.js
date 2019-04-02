import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App'

import Welcome from './components/Welcome'

import Page from './components/Page'

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/home',
            name:'welcome',
            component:Welcome,
            props:{title:"This is the SPA home"}
        },
        {
            path:'/spa-page',
            name:'page',
            component:Page,
            props:{
                'title':"欢迎光临spa 页面",
                'author':{
                    name:"jack",
                    role:"工程师",
                    code:"经常写代码"
                }
            }
        }
    ]
})

const app = new Vue({
    el:'#app',
    components:{App},
    router,
})
