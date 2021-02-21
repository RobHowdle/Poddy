import Index from './components/Index';
import NotFound from './components/NotFound';
import Hosts from './components/Hosts';
import Chapters from './components/Chapters';
import Episodes from './components/Episodes';
import Gallery from './components/Gallery';
import LatestEpisodeBlock from './components/LatestEpisodeBlock';

export default {
    mode: 'history',
        
    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '/',
            component: Index,
            name: 'home'
        },
        {
            path: '/hosts',
            component: Hosts,
            name: 'hosts'
        },
        {
            path: '/chapters',
            component: Chapters,
            name: 'chapters'
        },
        {
            path: '/episodes',
            component: Episodes,
            name: 'episodes'
        },
        {
            path: '/gallery',
            component: Gallery,
            name: 'gallery'
        }
    ]
}