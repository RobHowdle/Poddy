import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import axios from 'axios';
import alpinejs from 'alpinejs';
import VIcon from 'vue-tailwind-icons';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.use(VueRouter);
Vue.use(VIcon)

Vue.use(VIcon, { set: 'outline' })

let app = new Vue({
    el:'#app',

    router: new VueRouter(routes)
});