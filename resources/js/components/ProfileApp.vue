<template>
    <div>
        <app-header></app-header>

        <router-view
            :key="$route.path"
        ></router-view>

        <app-footer></app-footer> 
    </div>
</template>

<script>
import AppHeader from './Layout/AppHeader'
import AppFooter from './Layout/AppFooter'

export default {
    components: {
        AppHeader,
        AppFooter,
    },
    data: () => ({
        drawer: false,
        routes: [
            {
                title: "Home",
                route: "/home"
            },
        ],
    }),
}
</script>
