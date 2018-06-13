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

mix.js([
    'resources/assets/js/app.js',
    'resources/assets/js/core/jquery.min.js',
    'resources/assets/js/core/popper.min.js',
    'resources/assets/js/bootstrap-material-design.js',
    'resources/assets/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/assets/js/plugins/chartist.min.js',
    'resources/assets/js/plugins/arrive.min.js',
    'resources/assets/js/plugins/bootstrap-notify.js',
    'resources/assets/js/material-dashboard.js?v=2.0.0',
    'resources/assets/js/plugins/demo.js',
], 'public/js');

mix.styles(
    [
        'resources/assets/css/material-dashboard.css',
        'resources/assets/css/demo.css'
    ], 'public/css/all.css');
