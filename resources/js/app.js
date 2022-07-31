
require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Toasted from 'vue-toasted';
import axios from 'axios';
import VueAxios from 'vue-axios'
import VueI18n from 'vue-i18n'
import login from './components/Login.vue'
import {messages} from './translates'
import common from './commo';

Vue.prototype.$axios = axios
//window.axios = require('axios');
Vue.use(
  VueRouter
);

Vue.use(Toasted, {
  duration: 5000,
  iconPack: 'material',
  theme: "toasted-primary",
  position:"top-right"
});
Vue.use(VueAxios,axios);
Vue.use(VueI18n);
Vue.mixin(common);
const i18n = new VueI18n({
  locale: 'en', // set locale
  messages,
});
//Vue.component('login', require('./components/Login.vue').default)
const app = new Vue({
  el: '#app',
  i18n,
  render: h => h(login),
  components: { login }

});