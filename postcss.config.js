const tailwindcss = require('tailwindcss');
const postcssPresetEnv = require('postcss-preset-env');

module.exports = {
  plugins: [
      "autoprefixer",
      postcssPresetEnv({
          features: {
              'is-pseudo-class': false,
          },
      }),
      tailwindcss
  ],
};
