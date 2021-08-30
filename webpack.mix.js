const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sass('resources/scss/custom-style.scss', 'public/css')
    .sass('resources/scss/index.scss', 'public/css')

    .babel('resources/js/vue.js', 'public/js/vue.min.js')

    .browserSync('http://127.0.0.1:8000')
    .version();
