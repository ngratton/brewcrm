import router from './router.js'
import navmenu from './components/navmenu.js'
import pageheader from './components/pageheader.js'

new Vue({
    el: '#app',
    components: {
        navmenu,
        pageheader,
    },
    router,
})
