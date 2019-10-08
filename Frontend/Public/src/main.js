import Vue from 'vue'
import App from './App.vue'
// import Swal from 'sweetalert2'
import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import VueRouter from 'vue-router'
import vuetify from './plugins/vuetify';
import VueI18n from 'vue-i18n'

Vue.use(VueI18n)
Vue.use(VueRouter)
export default new VueRouter({
  routes: [
    {
    }
  ]
});

Vue.config.productionTip = false

new Vue({
  vuetify,
  render: h => h(App)
}).$mount('#app')
