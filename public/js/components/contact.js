import tpl from '../utils/avecTemplateHtml.js'
import { http_get } from '../utils/request.js'

export default Vue.component('contacts', tpl({
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
        openDetails(id) {
            this.$router.push(`/contact/${id}`)
        }
    },
    watch: {

    },
}))
