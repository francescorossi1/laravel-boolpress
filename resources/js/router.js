import Vue from 'vue'
import VueRouter from 'vue-router'

import AboutPage from './components/pages/AboutPage';
import ContactsPage from './components/pages/ContactsPage';
import HomePage from './components/pages/HomePage';
import PostDetailPage from './components/pages/PostDetailPage';
import NotFoundPage from './components/pages/NotFoundPage';

Vue.use(VueRouter)

const routes = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: HomePage, name: 'home'},
        { path: '/about', component: AboutPage, name: 'about'},
        { path: '/contacts', component: ContactsPage, name: 'contacts'},
        { path: '/posts/:id', component: PostDetailPage, name: 'post-detail'},
        { path: '*', component: NotFoundPage, name: 'not-found'},
    ]
});

export default routes;