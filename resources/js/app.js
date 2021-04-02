require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import AudioVisual from 'vue-audio-visual'
import InertiaTable from 'inertia-table'

InertiaProgress.init({ color: '#4B5563' });


const el = document.getElementById('app');

createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
            resolveErrors: page => (page.props.errors || {}),
        }),
})
    .mixin({
    methods: {
        route,

        hasRole(role) {
        if (!this.$page.props.auth.user || !this.$page.props.auth.user.roles)
            return false;

        return this.$page.props.auth.user.roles.some(userRole => userRole.name === role);
        }
    }
    })
    .use(InertiaPlugin)
    .use(AudioVisual)
    .use(InertiaTable)
    .mount(el);


