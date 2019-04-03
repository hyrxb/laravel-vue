import Vue from 'vue'
import VueRouter from 'vue-router'

// 引入iView UI
import iView from 'iview'
import 'iview/dist/styles/iview.css'



import App from './components/App';

import Welcome from './components/Welcome';

import Page from './components/Page';

import Home from './components/Home'

import Learn from './components/Learn'

import Learn1 from './components/Learn1'

Vue.use(VueRouter)
Vue.use(iView)

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
        },
        {
            path:'/test1',
            name:'test1',
            component:Home
        },
        {
            path:'/learn',
            name:'leran',
            component:Learn
        },
        {
            path:'/learn2',
            name:'learn2',
            component:Learn1
        }

    ]
})


Vue.filter('msgFormat',function(msg){
    return msg.replace('好',"*");
});


const app = new Vue({
    el:'#app',
    router,
    render: h => h(App)
})
