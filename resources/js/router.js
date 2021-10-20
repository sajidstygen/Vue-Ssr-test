import Vue from 'vue'
import Router from 'vue-router'
import VueMeta from 'vue-meta'

Vue.use(Router);
Vue.use(VueMeta)

function PageComponent(name) {
    return {
        render: h => h('h2', `Hello from the ${name} page`)
    };
}

export default new Router({
    mode: 'history',
    routes: [
        { path: '/', component: PageComponent('Home'), name: 'Home' },
        { path: '/about', component: PageComponent('About'), name: 'about' },
        { path: '/contact', component: PageComponent('contact'), name: 'contact' }
    ]
});
