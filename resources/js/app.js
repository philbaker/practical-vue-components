require('./bootstrap');

window.Vue = require('vue');

Vue.component('scroll-link', require('./components/ScrollLink.vue').default);
Vue.component('dropdown', require('./components/Dropdown').default);
Vue.component('visible', require('./components/Visible').default);
Vue.component('carousel', require('./components/Carousel.vue').default)
Vue.component('tab', require('./components/Tab.vue').default)
Vue.component('tabs', require('./components/Tabs.vue').default)
Vue.component('modal', require('./components/Modal.vue').default)

const app = new Vue({
    el: '#app',
    data: {
        exampleModalShowing: false,
    }
});
