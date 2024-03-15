const path = require('path');
const isProduction = process.env.NODE_ENV === 'production';
const CopyPlugin = require('copy-webpack-plugin');

const config = {
    entry: './resources/js/site.js',
    output: {
        path: path.resolve(__dirname, 'dist/assets/js'),
        filename: 'site.js',
    },
    module: {
      rules: [
          {
              test: /\.css$/,
              use: ['style-loader', 'css-loader', 'postcss-loader']
          }
      ]
    },
    plugins: [
        new CopyPlugin({
            patterns: [
                { from: 'resources/images', to: path.resolve(__dirname, 'dist/assets/images') },
            ],
        }),
    ],
    resolve: {
        extensions: ['.js'],
    },
};

module.exports = () => {
    config.mode = (isProduction) ? 'production' : 'development';
    return config;
};
