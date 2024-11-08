import './assets/main.css'
import 'bootstrap/dist/js/bootstrap.min.js'

import { createApp } from 'vue'
import { createMemoryHistory, createRouter } from 'vue-router'

import App from './App.vue'
import LoginView from './LoginView.vue'
import HomeView from './HomeView.vue'




const routes = [
    { path: '/', component: LoginView},
    { path: '/home', component: HomeView}
    
]

const router = createRouter({
    // history: createMemoryHistory(),
    routes,
})



const app = createApp(App)
    .use(router)
    .mount('#app')
