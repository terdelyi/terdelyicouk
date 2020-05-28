module.exports = function (api) {
    api.createPages(({ createPage }) => {
        createPage({
            path: '/contact/thanks',
            component: './src/pages/ContactThanks.vue'
        })
    })
}
