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
import VueLodash from 'vue-lodash';
import moment from 'moment';
import 'popper.js';

Vue.use(VueLodash)
Vue.component(VueCountdown.name, VueCountdown);

// import routes here
import Routes from './routes';

Vue.use(VueI18n)
Vue.use(VueRouter)

const router = new VueRouter({
    routes: Routes
});


Vue.config.productionTip = false

new Vue({
    router,
    vuetify,
    render: h => h(App)
}).$mount('#app')
