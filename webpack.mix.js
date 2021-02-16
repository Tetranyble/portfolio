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
    .sass('resources/sass/app.scss', 'public/css')
    /* .styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/owl.carousel.min.css',
    'resources/assets/css/magnific-popup.css',
    'resources/assets/css/icomoon.css',
    'resources/assets/css/icofont.min.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/style.css',
    'resources/assets/css/responsive.css'], 'public/assets/css/index.css') */
    /* .scripts([
    'resources/assets/js/jquery-3.3.1.min.js',
    ], 'public/assets/js/index.js') */
    .copyDirectory('resources/assets', 'public/assets')
    .copyDirectory('resources/images', 'public/images');
