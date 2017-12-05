let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js/app.js');
mix.js('resources/assets/js/app-modul.js', 'public/js/app-modul.js');

mix.sass('resources/assets/sass/Blog/app-blog.scss', 'public/css/app-blog.css');
mix.sass('resources/assets/sass/Small/app-small.scss', 'public/css/app-small.css');
mix.sass('resources/assets/sass/Landing/app.scss', 'public/css/app.css');