// This is the main.js file. Import global CSS and scripts here.
// The Client API can be used here. Learn more: gridsome.org/docs/client-api

import DefaultLayout from '~/layouts/Default.vue'

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { config, library } from '@fortawesome/fontawesome-svg-core'
import { faGithub, faTwitter, faSoundcloud, faLinkedinIn } from '@fortawesome/free-brands-svg-icons'
import '@fortawesome/fontawesome-svg-core/styles.css'
import '~/resources/scss/main.scss'

config.autoAddCss = false;
library.add(faGithub, faTwitter, faSoundcloud, faLinkedinIn);

export default function (Vue, { router, head, isClient }) {
  Vue.component('Layout', DefaultLayout)
  Vue.component('font-awesome', FontAwesomeIcon)
  head.htmlAttrs = { lang: 'en' }
  head.bodyAttrs = { class: 'bg-white-barry font-sans' }
}
