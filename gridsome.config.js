module.exports = {
  siteName: 'Tamas Erdelyi',
  siteDescription: '',
  siteUrl: 'https://terdelyi.co.uk',
  plugins: [
    {
      use: 'gridsome-plugin-tailwindcss',
    },
    {
      use: '@gridsome/source-filesystem',
      options: {
        typeName: 'Note',
        path: './content/notes/**/*.md',
        refs: {
          categories: {
            typeName: 'Category',
            create: true
          }
        }
      }
    }
  ],
  templates: {
    Note: [{
      path: '/notes/:slug',
      component: './src/templates/Note.vue'
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
  permalinks: {
    slugify: {
      use: '@sindresorhus/slugify',
      options: {
        decamelize: false,
      }
    }
  },
  chainWebpack: config => {
    config.resolve.alias.set('@modules', '@/resources/js/modules');
    config.resolve.alias.set('@utilities', '@/resources/js/utilities');
  }
}
