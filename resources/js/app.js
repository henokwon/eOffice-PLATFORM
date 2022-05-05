

require('./bootstrap');


import Vue from 'vue';
window.Vue = Vue;
import VueRouter from 'vue-router'

Vue.use(VueRouter)





Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app'
  });
  
