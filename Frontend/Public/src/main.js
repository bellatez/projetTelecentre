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


Vue.use(VueI18n)
Vue.use(VueRouter)

import home from './components/home';
import HelloWorld from "./components/HelloWorld";
import announcement from "./components/information/index";
import calendar from "./components/information/calendar"


const router = new VueRouter({
  routes: [
    { path: '/', component: home },
    { path: '/login', component: HelloWorld },
    { path: '/announcement', component: announcement},
    { path: '/calendar', component: calendar},
  ]
})


Vue.config.productionTip = false

new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount('#app')
