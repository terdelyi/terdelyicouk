module.exports = {
  siteName: 'terdelyi.co.uk',
  siteDescription: '',
  siteUrl: 'https://terdelyi.co.uk',
  plugins: [
    {
      use: 'gridsome-plugin-tailwindcss',
      options: {
        tailwindConfig: './tailwind.config.js',
        purgeConfig: {},
        presetEnvConfig: {},
        shouldPurge: false,
        shouldImport: true,
        shouldTimeTravel: true,
        shouldPurgeUnusedKeyframes: true,
      }
    },
    {
      use: '@gridsome/source-filesystem',
      options: {
        typeName: 'Entry',
        path: './content/entries/**/*.md',
        refs: {
          category: {
            typeName: 'Category',
            create: true
          }
        }
      }
    }
  ],
  templates: {
    Entry: [{
      path: '/notes/:title',
      component: './src/templates/Entry.vue'
    }],
    Category: [{
      path: '/category/:title',
      component: './src/templates/Category.vue'
    }]
  },
  transformers: {
    remark: {
      plugins: [
        '@gridsome/remark-prismjs'
      ],
      externalLinksTarget: '_blank',
      externalLinksRel: ['nofollow', 'noopener', 'noreferrer'],
      anchorClassName: 'icon icon-link',
    }
  },
  chainWebpack: config => {
    config.resolve.alias.set('@modules', '@/resources/js/modules');
    config.resolve.alias.set('@utilities', '@/resources/js/utilities');
  }
}
