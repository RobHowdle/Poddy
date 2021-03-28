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
    .mixin({ methods: { route } })
    .use(InertiaPlugin)
    .use(AudioVisual)
    .use(InertiaTable)
    .mount(el);


