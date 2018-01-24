import Vue from 'vue'

Vue.filter('firstName', function (name) {
    return name.substr(0, name.indexOf(' '));
})