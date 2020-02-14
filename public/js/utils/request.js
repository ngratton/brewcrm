/**
 * 
 * @param {*} url 
 * 
 * @example
 * http_get('http://.../api/messages').then(data => {
 * 
 * })
 */


export function http_get(url) {
    return new Promise(function(resolve, reject) {
        const opts = {
            method: 'GET',
            mode: 'cors',
        }
    
        fetch(url, opts).then(resp => {
            resp.json().then(resolve)
        })
    })

}


/**
 * 
 * @param {*} url 
 * 
 * @example
 * http_get('http://.../', {
 *      username: 'Crapoute',
 *      msg_body: 'Lorem Ipsum'
 * }).then(data => {
 * 
 * })
 */


export function http_post(url, info) {
    return new Promise(function(resolve, reject) {
        const opts = {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(info),
        }
    
        fetch(url, opts).then(resp => {
            resp.json().then(resolve)
        })
    })

}