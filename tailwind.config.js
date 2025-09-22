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
      'primary': 'rgb(var(--color-primary))',
      'secondary': 'rgb(var(--color-secondary))',
      'accent': 'rgb(var(--color-accent))',
      'body': 'rgb(var(--color-body))',
      'content': 'rgb(var(--color-content))',
      'white': 'rgb(var(--color-white))',
      'black': 'rgb(var(--color-black))',
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ]
}
