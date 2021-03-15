const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/front/ajax-request-helper.js', 'public/js/front')
mix.js('resources/js/front/task1/data.js', 'public/js/front/task1')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
