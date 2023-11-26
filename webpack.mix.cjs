let mix = require('laravel-mix');

//mix.js('src/app.js', 'public').setPublicPath('public');

mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/app.css', 'public/css')
    .vue();
