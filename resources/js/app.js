require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp } from 'vue'

import welcome from './components/welcome.vue';

const app = createApp({});

app.component('hello-world', welcome);

// mount the app to the DOM
app.mount('#app');

window.Alpine = Alpine;

Alpine.start();
