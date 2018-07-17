window.axios = require('axios')

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.sourceacademy.csrf_token
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
