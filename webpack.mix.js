let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Localization
const WebpackShellPlugin = require('webpack-shell-plugin');
mix.webpackConfig({
    plugins:
        [
            new WebpackShellPlugin({onBuildStart:['php artisan lang:js --quiet --no-lib'], onBuildEnd:[]})
        ]
});

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.sass('resources/assets/sass/mosaique.scss', 'public/css');
mix.sass('resources/assets/sass/character_creation.scss', 'public/css');
