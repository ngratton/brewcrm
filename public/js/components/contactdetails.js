import tpl from '../utils/avecTemplateHtml.js'
import { http_get } from '../utils/request.js'

export default Vue.component('contactdetails', tpl({
    template: 'components/contactdetails.html',
    data() {
        return {
            contactId: this.$route.params.id,
            contact: Object,
        }
    },
    mounted() {
        http_get(`http://brewcrm.localhost/api/contact/${this.contactId}`).then(data => {
            this.contact = data
        })
    },
    computed: {
        nomComplet() {
            return this.contact.prenom + ' ' + this.contact.nom
        },
    },
    methods: {

    },
}))
