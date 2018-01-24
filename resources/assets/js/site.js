import './bootstrap'
import Vue from 'vue'
import Vuex from 'vuex'
import components from './components'

// window.Vue = Vue

Vue.use(Vuex)

Vue.filter('firstName', function (name) {
  return name.substr(0, name.indexOf(' '));
})

let store = new Vuex.Store({
  state: {
    user: {
      created_at: window.user.created_at,
      email: window.user.email,
      id: window.user.id,
      isLoggedIn: window.user.isLoggedIn,
      name: window.user.name,
      type: window.user.type
    }
  },
})

const app = new Vue({
    el: '#app',
    store,
    components: {
      'navbar': components.navbar,
      'sidebarLayout': components.sidebarLayout,
      'sourcerorCard': components.sourcerorCard,
    }
})
