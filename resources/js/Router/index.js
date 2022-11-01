import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../Pages/Drinks/Index.vue')
    },
    {
        path: '/popular',
        name: 'popular',
        component: () => import('../Pages/Popular/Index.vue')
    },
    {
        path: '/latest',
        name: 'latest',
        component: () => import('../Pages/Latest/Index.vue')
    },
    {
        path: '/random',
        name: 'random',
        component: () => import('../Pages/Random/Index.vue')
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
