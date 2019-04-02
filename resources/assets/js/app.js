require('./bootstrap');

window.Vue = require('vue');

Vue.component('welcome', require('./components/Welcome.vue'));
Vue.component('page', require('./components/Page.vue'));

const app = new Vue({
    el: '#app'
});