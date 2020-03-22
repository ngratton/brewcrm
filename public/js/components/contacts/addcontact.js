import tpl from '../../utils/avecTemplateHtml.js'
import { http_post, http_get } from '../../utils/request.js'

export default Vue.component('addcontact', tpl({
    template: 'components/contacts/addcontact.html',
    data() {
        return {
            prenom: '',
            nom: '',
            titre: '',
            email_1: '',
            email_1_type: '',
            email_2: '',
            email_2_type: '',
            phone_1: '',
            phone_1_type: '',
            phone_2: '',
            phone_2_type: '',
            companie_id: '',
            notes: '',
        }
    },
    methods: {
        submitNewContact() {
            var fd = {
                'prenom': this.prenom,
                'nom': this.nom,
                'titre': this.titre,
                'email_1': this.email_1,
                'email_1_type':this.email_1_type,
                'email_2': this.email_2,
                'email_2_type':this.email_2_type,
                'phone_1': this.phone_1,
                'phone_1_type':this.phone_1_type,
                'phone_2': this.phone_2,
                'phone_2_type':this.phone_2_type,
                'companie_id':this.companie_id,
                'notes':this.notes,
            }

            http_post('http://brewcrm.localhost/api/contact/add', fd).then(
                http_get('http://brewcrm.localhost/api/contact/latest').then(data => {
                    this.$router.push(`/contact/${data.id}`)
                })
            )
        }
    },
}))
