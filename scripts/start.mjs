/**
 * Compile Javascript and SASS
 * 
 * @author: Alex Truex
 */

/* Import Libraries */
import webpack from 'webpack';
import { dirname } from 'path';
import { fileURLToPath } from 'url';

const __dirname = dirname(fileURLToPath(import.meta.url));

/* Build JS and SASS */
const compiler = webpack({
    entry: './src/main.js',
    output: {
        filename: 'main.js',
        path: __dirname + '/../'
    },
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            'presets': ['@babel/preset-env']
                        }
                    }
                ]
            },
            {
                test: /\.scss$/,
                use: [
                    'style-loader', // creates style nodes from JS strings
                    'css-loader', // translates CSS into CommonJS
                    'sass-loader' // compiles Sass to CSS, using Node Sass by default
                ]
            },
            {
                test: /\.(png|jpg|gif)$/,
                use: [
                    'url-loader'
                ]
            }
        ]
    }
});

compiler.watch({
    aggregateTimeout: 300,
    poll: undefined
}, (err, stats) => {
    if (err == null && stats.compilation.errors.length == 0) {
        console.log('[OK!] JS Compiled');
    }
    else {
        console.log('[ERROR!]');
        console.log(err);
        console.log(stats.compilation.errors);
    }
});