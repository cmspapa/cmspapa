/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Loop through components
for (var i = 0;  i < vueComponents.length;  i++) {
	Vue.component(vueComponents[i].name, require('./../../../../modules/'+vueComponents[i].module_name+'/src/vue/'+vueComponents[i].name+'.vue'));
}

Vue.component('structure', require('./structure.vue'));
Vue.component('home', require('./components/home.vue'));
Vue.component('about', require('./components/about.vue'));

// Routes
const NotFound = { template: '<p>Page not found</p>' }
const Home = { template: '<home></home>' }
const About = { template: '<about></about>' }

const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About }
]

const router = new VueRouter({
  	routes,
  	mode: 'history'
})

const app = new Vue({
  router
}).$mount('#app')
