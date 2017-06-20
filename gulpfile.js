const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    // Build Stylesheet
    mix.sass(
        'stylesheet.scss',
        'public/css/stylesheet.css'
    );
    mix.sass(
        'index.scss',
        'public/css/index.css'
    );
    // Copy Jquery's JS
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery');
    // Copy Bootstrap's JS
    mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'resources/assets/js/bootstrap');
    // Copy Lightbox's JS
    mix.copy('node_modules/drmonty-ekko-lightbox/js/ekko-lightbox.js', 'resources/assets/js/drmonty-ekko-lightbox');
    mix.copy('node_modules/drmonty-ekko-lightbox/js/ekko-lightbox.min.js', 'public/js/drmonty-ekko-lightbox');
    // Copy Font Awesome Markers
    mix.copy('node_modules/fontawesome-markers/fontawesome-markers.min.js', 'public/js/fontawesome-markers');
    // Build JS
    mix.scripts(
        [
            'jquery/jquery.min.js',
            'bootstrap/bootstrap.js',
            //'drmonty-ekko-lightbox.js',
            'default.js'
        ],
        'public/js/default.js'
    );
    // Copy Fonts
    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    // Create Build Numbers
    mix.version(['css/stylesheet.css', 'css/index.css', 'js/default.js']);
});
