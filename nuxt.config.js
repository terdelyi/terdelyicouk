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
            title: 'Tamas Erdelyi - Senior Backend Engineer',
            description: `Tamas is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom`,
            meta: [
                { ogTitle: 'Tamas Erdelyi - Senior Backend Engineer' },
                { ogDescription: `Tamas is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom` },
                { twitterCard: 'summary_large_image' },
                { twitterSite: '@terdelyi' },
                { twitterTitle: 'Tamas Erdelyi - Senior Backend Engineer' },
                { twitterDescription: `Tamas is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom` },
                { twitterCreator: '@terdelyi' },
            ],
        },
    },
    site: {
        url: 'https://terdelyi.co.uk',
    },
    routeRules: {
        '/contact': { prerender: true },
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
            'Libre+Franklin:400;500;600;700;800'
        ],
    },
    css: ['~/assets/sass/main.scss'],
    postcss: {
        plugins: {
            tailwindcss: {},
            autoprefixer: {},
        },
    },
    nitro: {
        prerender: {
            crawlLinks: true,
        }
    }
})