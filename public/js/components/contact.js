import tpl from '../utils/avecTemplateHtml.js'
import { http_get } from '../utils/request.js'

Vue.component('contacts', tpl({
    template: 'components/contacts.html',
    data() {
        return {
            contactList: [],
        }
    },
    mounted() {
        http_get('http://brewcrm.localhost/api/contacts').then(data => {
            this.contactList = data
        })
    },
    updated() {

    },
    beforeDestroy () {

    },
    methods: {
        hello() {
            console.log('Hello!')
        }
    },
    watch: {

    },
}))
