import contacts from './components/contact.js'
import contactdetails from './components/contactdetails.js'
import addcontact from './components/contacts/addcontact.js'

export default new VueRouter({
    routes: [
        {
            path: '/', components: {
                default: contacts,
            }
        },
        {
            path: '/contact/:id',
            component: contactdetails,
        },
        {
            path: '/add/contact',
            component: addcontact,
        },
    ]
})
