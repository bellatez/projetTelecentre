/* eslint-disable */
import Vue from 'vue';
import App from './App.vue';
// import Swal from 'sweetalert2'
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import VueRouter from 'vue-router';
import vuetify from './plugins/vuetify';
import VueI18n from 'vue-i18n';
import VueCountdown from '@chenfengyuan/vue-countdown';
Vue.component(VueCountdown.name, VueCountdown);

import 'popper.js';


import JQuery from 'jquery';
window.$ = window.JQuery = JQuery;



// import library routes here
import index from './components/library/Index.vue'
import epreuves from './components/library/epreuves.vue'
import books from './components/library/books.vue'
import examens from './components/library/examens.vue'

// import annoucment routes here

// import calensr routes here


// import information routes here



Vue.use(VueI18n)
Vue.use(VueRouter)

//import home from './components/home';
import home from "./components/home";
import announcement from "./components/information/index";
import calendar from "./components/information/calendar"


const router = new VueRouter({
    routes: [

        { path: '/', component: home },
        //{ path: '/login', component: HelloWorld },
        { path: '/announcement', component: announcement },
        { path: '/calendar', component: calendar },


        //library routes
        { path: '/libryIndex', component: index },
        { path: '/books', component: books },
        { path: '/epreuves/:id', name: 'epreuves', component: epreuves },
        { path: '/examens', component: examens },
        { path: '/books', component: books }
    ]
})


Vue.config.productionTip = false

new Vue({
    router,
    vuetify,
    render: h => h(App)
}).$mount('#app')