const path = require('path');
const isProduction = process.env.NODE_ENV === 'production';
const CopyPlugin = require('copy-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const config = {
    entry: './resources/js/site.js',
    output: {
        path: path.resolve(__dirname, 'dist/assets/js'),
        filename: 'site.js',
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../css/site.css',
        }),
        new CopyPlugin({
            patterns: [
                { from: 'resources/images', to: path.resolve(__dirname, 'dist/assets/images') },
            ],
        }),
    ],
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader']
            }
        ]
    },
    resolve: {
        extensions: ['.js'],
    },
};

module.exports = () => {
    config.mode = (isProduction) ? 'production' : 'development';
    return config;
};
