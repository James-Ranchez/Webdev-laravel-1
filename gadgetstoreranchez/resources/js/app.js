import { createInertiaApp } from '@inertiajs/vue3';
import { createApp, h } from 'vue';
import '../css/app.css';

createInertiaApp({
    resolve: name => import(`./Pages/${name}.vue`),
    setup({ el, App, props }) {
        createApp({ render: () => h(App, props) }).mount(el);
    },
});

