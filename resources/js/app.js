/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import vueRouter from "vue-router";
import router from "./routes" ;
import Index from "./components/index.vue";

window.Vue = require('vue');


Vue.use(vueRouter);



const app = new Vue({
    el: '#app',
    router ,
    components : {
        "index" : Index ,
    }
});
