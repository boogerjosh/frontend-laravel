require('./bootstrap');

import Vue from 'vue';
import App from './components/App.vue';
import store from './store'

const app = new Vue({
    el: '#app',
    store: store,
    components: {
        'main-component': App
    }
});