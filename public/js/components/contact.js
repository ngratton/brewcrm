import tpl from '../utils/avecTemplateHtml.js'
import { http_get } from '../utils/request.js'

export default Vue.component('contacts', tpl({
    template: 'components/contacts.html',
    data() {
        return {
            contactList: Array,
            firstPageUrl: String,
            prevPageUrl: String,
            nextPageUrl: String,
            lastPageUrl: String,
            currentPageUrl: String,
            currentPageNum: Number,
            totalPages: Number,
            resultatsParPage: '10',
        }
    },
    mounted() {
        this.fetchContacts(this.resultatsParPage)
    },
    updated() {

    },
    beforeDestroy () {

    },
    methods: {
        fetchContacts(resultatsParPage) {
            http_get(`http://brewcrm.localhost/api/contacts/resultats/${resultatsParPage}`).then(data => {
                if (this.resultatsParPage == 0) {
                    this.contactList = data
                } else {
                    this.contactList = data.data
                    this.currentPageNum = data.current_page
                    this.totalPages = data.last_page
                    this.firstPageUrl = data.first_page_url
                    this.prevPageUrl = data.prev_page_url
                    this.nextPageUrl = data.next_page_url
                    this.lastPageUrl = data.last_page_url
                }
            })
        },
        changerPage(url) {
            http_get(url).then(data => {
                this.contactList = data.data
                this.currentPageNum = data.current_page
                this.totalPages = data.last_page
                this.firstPageUrl = data.first_page_url
                this.prevPageUrl = data.prev_page_url
                this.nextPageUrl = data.next_page_url
                this.lastPageUrl = data.last_page_url
            })
        },
        openDetails(id) {
            this.$router.push(`/contact/${id}`)
        },
        addContact() {
            this.$router.push('/add/contact')
        },
    },
    watch: {
        resultatsParPage() {
            this.fetchContacts(this.resultatsParPage)
        }
    },
}))
