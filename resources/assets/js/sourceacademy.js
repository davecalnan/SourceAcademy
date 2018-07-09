import './bootstrap'
import Vue from 'vue'
import Vuex from 'vuex'
import './components'
import './filters'
import './layouts'
import Typed from 'typed.js'


Vue.use(Vuex)

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
  store
})

let options = {
  backDelay: 1000,
  backSpeed: 60,
  loop: true,
  smartBackspace: true,
  startDelay: 400,
  strings: ['a website', 'an online store', 'a video', 'a poster'],
  typeSpeed: 60
}

let typed = new Typed('#typed-services', options)
