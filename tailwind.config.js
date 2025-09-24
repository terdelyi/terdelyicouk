/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./content/**/*.{html,php}",
      "./resources/**/*.js",
  ],
  darkMode: 'class',
  theme: {
    fontFamily: {
      sans: ['Roboto', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', '"Helvetica Neue"', 'Arial', 'sans-serif'],
      title: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', '"Helvetica Neue"', 'Arial', 'sans-serif'],
      mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
      serif: ['ui-serif', 'Georgia', 'Cambria', 'Times New Roman', 'Times', 'serif'],
    },
    colors: {
      'primary': 'rgb(28 48 153)',
      'secondary': 'rgb(20 31 77)',
      'accent': 'rgb(253 19 89)',
      'body': 'rgb(75 75 75)',
      'content': 'rgb(248 248 248)',
      'white': 'rgb(255 255 255)',
      'black': 'rgb(30 30 30)',
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ]
}
