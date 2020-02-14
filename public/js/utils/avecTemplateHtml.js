/**
 * Charge de façon asynchrone le fichier HTML du template avant de retourner l'objet à Vue
 *
 * @param {object} component Informations du component
 *
 * @returns Retourne les informations après avoir remplacé la valeur de template par son html
 *
 * @example
 * import avecTemplateHtml from './avecTemplateHtml.js'
 *
 * Vue.component('nom', avecTemplateHtml({
 *         data: function() {
 *             return {
 *                 texte: "Bob",
 *             }
 *         },
 *         template: 'nom.html'
 *     })
 * )
 *
 */
export default function avecTemplateHtml(component) {

    return (resolve, reject) => {
        fetch(component.template).then(resp => {
            resp.text().then(html => {
                component.template = html
                resolve(component)
            })
        }, error => {
            console.error("Erreur de chargement du template: ", error)
            reject(error)
        })
    }
}
