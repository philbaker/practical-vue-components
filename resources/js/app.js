require('./bootstrap');

window.Vue = require('vue');

Vue.component('scroll-link', require('./components/ScrollLink.vue').default);

const app = new Vue({
    el: '#app'
});
