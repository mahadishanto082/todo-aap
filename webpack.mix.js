const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js') // Example JS compilation task
   .sass('resources/sass/app.scss', 'public/css'); // Example SCSS compilation task
   mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css');
