import './bootstrap'
import Vue from 'vue'
import './components'
import './filters'
import InstantSearch from 'vue-instantsearch'
import Typed from 'typed.js'

Vue.use(InstantSearch);

const app = new Vue({
  el: '#app',

  data: {
      navbarMenuVisibility: false
  }
})

let options = {
  backDelay: 1000,
  backSpeed: 60,
  loop: true,
  smartBackspace: true,
  startDelay: 400,
  strings: ['a website made', 'your business online', 'an online store', 'your business found', 'your products online'],
  typeSpeed: 60
}

let typed = new Typed('#typed-services', options)