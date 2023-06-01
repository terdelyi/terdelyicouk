import shiki from 'shiki'

const experience = new Date().getFullYear() - 2002;

export default defineNuxtConfig({
    app: {
        head: {
            charset: 'utf-8',
            viewport: 'width=device-width, initial-scale=1',
            bodyAttrs: {
                class: 'bg-grey-300 dark:bg-grey-700 font-sans text-blue-400 dark:text-grey-500 antialiased'
            },
            link: [
                {
                    rel: 'preconnect',
                    href: 'https://fonts.googleapis.com'
                },
                {
                    rel: 'stylesheet',
                    href: 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap'
                }
            ],
            title: 'Tamas Erdelyi - Senior Web Developer',
            description: `Tamas is a Senior Web Developer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom`,
            meta: [
                { ogTitle: 'Tamas Erdelyi - Senior Web Developer' },
                { ogDescription: `Tamas is a Senior Web Developer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom` },
                { twitterCard: 'summary_large_image' },
                { twitterSite: '@terdelyi' },
                { twitterTitle: 'Tamas Erdelyi - Senior Web Developer' },
                { twitterDescription: `Tamas is a Senior Web Developer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom` },
                { twitterCreator: '@terdelyi' },
            ],
        }
    },
    modules: [
        '@nuxt/content',
        'nuxt-og-image',
    ],
    content: {
        highlight: {
            theme: {
                default: 'github-light',
                dark: 'github-dark'
            }
        },
        markdown: {
            anchorLinks: false,
        },
        'mdc': false,
    },
    ogImage: {
        fonts: [
            'Inter:400;500;600;700;800'
        ],
        siteUrl: 'https://terdelyi.co.uk',
        runtimeSatori: false,
    },
    css: ['~/assets/sass/main.scss'],
    postcss: {
        plugins: {
            tailwindcss: {},
            autoprefixer: {},
        },
    },
    experimental: {
        payloadExtraction: false
    }
})