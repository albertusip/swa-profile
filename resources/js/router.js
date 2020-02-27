import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    mode: 'history',
    hashbang: false,
    routes: [
        {
            path: '/',
            component: () => import('./components/Home/AppHome'),
            children: [
                {
                    path: '',
                    redirect: '/home'
                },
                {
                    name: 'home',
                    path: '/home',
                    component: () => import('./components/Home/AppHome')
                }
            ]
        },
    ]
})
