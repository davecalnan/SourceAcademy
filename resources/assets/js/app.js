require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('feedback', require('./components/feedback.vue'));
Vue.component('breadcrumbs', require('./components/breadcrumbs.vue'));
Vue.component('breadcrumbs-item', require('./components/breadcrumbs-item.vue'));
Vue.component('breadcrumbs', require('./components/breadcrumbs.vue'));
Vue.component('feedback-option', require('./components/feedback-option.vue'));
Vue.component('inline-input', require('./components/inline-input.vue'));
// Vue.component('onboarding', require('./components/onboarding.vue'));
Vue.component('toast', require('./components/toast.vue'));

window.Bus = new Vue();

const app = new Vue({
    el: '#app',

    data: {
      showToast: true
    },

    methods: {
      hideToast() {
        showToast = false;
      }
    },

    created() {
      Bus.$on('hideToast', () => this.showToast = false);
    }
});
