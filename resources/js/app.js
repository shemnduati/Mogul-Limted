require('./bootstrap');
window.Vue = require('vue');

import { createRouter, createWebHistory } from 'vue-router'

let routes = [
    
    { path: '/order', component: require('./components/Dashboard.vue').default },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
