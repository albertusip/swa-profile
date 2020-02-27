import Vue from 'vue'

import BootstrapVue from 'bootstrap-vue'
import ProfileApp from './components/ProfileApp'
import router from './router.js'
import '@fortawesome/fontawesome-free/css/all.css'

Vue.use(BootstrapVue)

new Vue({
    el: '#app',
    render: h => h(ProfileApp),
    router,
})
