/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./content/**/*.{html,php}",
      "./resources/**/*.js",
  ],
  darkMode: 'class',
  theme: {
    fontFamily: {
      sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', '"Helvetica Neue"', 'Arial', 'sans-serif'],
      mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
      serif: ['ui-serif', 'Georgia', 'Cambria', 'Times New Roman', 'Times', 'serif'],
    },
    colors: {
      'white-bg': '#f8f8f8',
      'grey-body': '#3c3c3c',
      'grey-100': '#ffffff',
      'grey-200': '#f1f1f1',
      'grey-300': '#eeeeee',
      'grey-400': '#dedede',
      'grey-500': '#A5AED0',
      'grey-550': '#7280B6',
      'grey-600': '#575a67',
      'grey-700': '#1f2642',
      'grey-750': '#181E35',
      'grey-800': '#0e1221',
      'pink': '#fd1359',
      'blue-100': '#9d9ecc',
      'blue-200': '#9697a9',
      'blue-300': '#515e7a',
      'blue-400': '#263477',
      'blue-450': '#3A415E',
      'blue-500': '#0c358c',
      'blue-600': '#0c47c2',
      'blue-700': '#1b275b',
      'cyan-100': '#6DAACC',
      'cyan-300': '#f5cd0b',
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ]
}
