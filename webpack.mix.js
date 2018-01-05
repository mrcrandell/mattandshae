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

// Compile Sass
mix.sass('resources/assets/sass/stylesheet.scss', 'public/css');
mix.sass('resources/assets/sass/index.scss', 'public/css');

// Combine JS
mix.scripts([
    'node_modules/jquery-slim/dist/jquery.slim.js',
    'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
], 'public/js/default.js');

// Copy
// Copy Font Awesome Markers
mix.copy('node_modules/fontawesome-markers/fontawesome-markers.min.js', 'public/js/fontawesome-markers');
// Copy Fonts
mix.copyDirectory('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
mix.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts');

// Version in Prod
if (mix.inProduction()) {
    mix.version();
}
