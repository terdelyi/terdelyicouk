module.exports = function (api) {
    api.onCreateNode(options => {
        if (options.internal.typeName === 'Note') {

            options.categories = (typeof options.categories === 'string') ? options.categories.split(',').map(string => string.trim()) : options.categories;
            return {
                ...options
            };
        }
    })

    api.createPages(({ createPage }) => {
        createPage({
            path: '/contact/thanks',
            component: './src/pages/ContactThanks.vue'
        })
    })
}
