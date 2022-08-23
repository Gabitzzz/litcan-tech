require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import 'tw-elements';
import 'animate.css';
import 'vue-social-chat/dist/style.css';
import CookieConsent from 'vue-cookieconsent';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component('CookieConsent', CookieConsent)
            .mixin({ methods: { route } })
            .mount(el);

    },
    created() {

    }


});




