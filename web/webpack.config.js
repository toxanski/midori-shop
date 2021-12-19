const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    mode: 'production',
    entry: './src/js/index.js',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'script.js',
        environment: {
            arrowFunction: false,
        }
    },
    optimization: {
        minimize: true,
    },
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader"
                }
            },
            {
                test: /\.(sass|css|scss)$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 1,
                        }
                    },
                    "postcss-loader",
                    'sass-loader',
                ]
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "style.min.css",
        }),
    ],

}