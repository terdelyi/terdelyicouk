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
            anchorLinks: false,
            mdc: false,
        },
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
    }
})