
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('login', require('./components/login/Main.vue'));
Vue.component('email', require('./components/login/Email.vue'));
Vue.component('password', require('./components/login/Password.vue'));
Vue.component('checkbox', require('./components/login/Checkbox.vue'));
Vue.component('submit', require('./components/login/Submit.vue'));
Vue.component('error', require('./components/login/Error.vue'));

Vue.component('navigation', require('./components/navigation/Main.vue'));
Vue.component('nav-item', require('./components/navigation/NavItem.vue'));

const app = new Vue({
    el: '#app'
});
