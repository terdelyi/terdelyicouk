export default defineNuxtPlugin(() => {
    return {
        provide: {
            experienceInYears: (new Date().getFullYear() - 2002).toString(),
            formatDate: (dateString: string) => {
                const date = new Date(dateString)

                return new Intl.DateTimeFormat('default', {dateStyle: 'medium'}).format(date)
            },
            formatTags: (tags: Array<string>) => {
                return tags.join(', ')
            }
        }
    }
})