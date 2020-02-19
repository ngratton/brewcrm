import Contacts from './components/contact.js'
import ContactDetails from './components/contactdetails.js'
import Dummy from './components/dummy.js'

export default new VueRouter({
    routes: [
        { path: '/', components: {
                default: Contacts,
                Dummy
            }
        },
        { path: '/contact/:id', component: ContactDetails },
    ]
})
