let mix = require('laravel-mix');

mix.react('resources/js/app.js', 'public/js') // Обработка React
   .sass('resources/sass/app.scss', 'public/css'); // Обработка Sass для стилей
