// This is the main.js file. Import global CSS and scripts here.
// The Client API can be used here. Learn more: gridsome.org/docs/client-api

import DefaultLayout from '~/layouts/Default.vue'

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { config, library } from '@fortawesome/fontawesome-svg-core'
import { faGithub, faTwitter, faSoundcloud, faLinkedinIn } from '@fortawesome/free-brands-svg-icons'
import '@fortawesome/fontawesome-svg-core/styles.css'
import '~/resources/scss/main.scss'
import 'prismjs/themes/prism-tomorrow.css'

config.autoAddCss = false;
library.add(faGithub, faTwitter, faSoundcloud, faLinkedinIn);

export default function (Vue, { head }) {
    Vue.component('Layout', DefaultLayout)
    Vue.component('font-awesome', FontAwesomeIcon)
    head.htmlAttrs = {lang: 'en'}
    head.bodyAttrs = {class: 'bg-barry-white font-sans'}
    head.link.push({
        rel: 'stylesheet',
        href: 'https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap'
    })
    head.meta = [
        { charset: 'utf-8' },
        { name: 'generator', content: `Gridsome v${config.version}` },
        { key: 'viewport', name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { key: 'format-detection', name: 'format-detection', content: 'telephone=no' },
        { key: 'apple-mobile-web-app-capable', name: 'apple-mobile-web-app-capable', content: 'yes' },
    ]
}
