require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './components/Home'
import AddArticle from './components/AddArticle'
import About from './components/About'
import Comments from './components/Comments'


Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/comments',
            name: 'comments',
            component: Comments,
            props: true
        },
        {
            path: '/addarticle',
            name: 'addarticle',
            component: AddArticle
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { Home },
    router
});
