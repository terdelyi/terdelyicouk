module.exports = {
  purge: {
    enabled: true,
    content: [
        './src/**/*.vue',
        './src/**/*.js',
    ],
  },
  darkMode: 'media',
  theme: {
    fontFamily: {
      sans: ['Rubik', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', '"Helvetica Neue"', 'Arial', 'sans-serif'],
      mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
    },
    colors: {
      'dark': '#11162b',
      'less-dark': '#1a2038',
      'grey': '#5f6271',
      'grey-jr': '#dedede',
      'whiteish': '#f7f7f7',
      'barry-white': '#ffffff',
      'dark-white': '#848794',
      'pink': '#fd1383',
      'blue': '#103b96',
      'blue-steel': '#222a50',
      'almost-blue': '#8895b3',
    },
  },
}
