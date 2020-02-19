import tpl from '../utils/avecTemplateHtml.js'
import { http_get } from '../utils/request.js'

export default Vue.component('contactdetails', tpl({
    template: 'components/contactdetails.html',
    data() {
        return {
            contactId: this.$route.params.id,
            contact: '',
        }
    },
    mounted() {
        http_get(`http://brewcrm.localhost/api/contact/${this.contactId}`).then(data => {
            this.contact = data
        })
    },
    updated() {

    },
    beforeDestroy () {

    },
    methods: {
        openDetails(id) {
            // router.push(`/contact/${id}`)
        }
    },
    watch: {

    },
}))
