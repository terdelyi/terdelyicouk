const experience = new Date().getFullYear() - 2002

export default defineNuxtConfig({
    app: {
        baseURL: '/',
        head: {
            charset: 'utf-8',
            viewport: 'width=device-width, initial-scale=1',
            bodyAttrs: {
                class: 'bg-grey-300 dark:bg-grey-700 font-sans text-blue-400 dark:text-grey-500 antialiased'
            },
            title: 'Tamas Erdelyi',
        }
    },
    routeRules: {
        '/contact': {
            prerender: true
        },
    },
    modules: [
        '@nuxt/content',
        '@nuxt/image',
        '@nuxtjs/color-mode',
        '@nuxtjs/google-fonts',
    ],
    content: {
        watch: false,
        highlight: {
            theme: {
                default: 'github-light',
                dark: 'github-dark'
            }
        },
        markdown: {
            anchorLinks: {
                depth: 0,
                exclude: [1, 2, 3, 4, 5, 6],
            },
            mdc: false,
        },
    },
    googleFonts: {
        families: {
            Inter: [400, 600, 700, 800],
        }
    },
    colorMode: {
        classSuffix: ''
    },
    css: [
        '~/assets/sass/main.scss'
    ],
    postcss: {
        plugins: {
            tailwindcss: {},
            autoprefixer: {},
        },
    },
    runtimeConfig: {
        public: {
            content: {
                host: 'localhost',
            },
        }
    },
    typescript: {
        typeCheck: true,
    }
})