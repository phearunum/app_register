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
<<<<<<< HEAD
    .postCss('resources/css/app.css', 'public/css', [
=======
    .postCss('resources/css/app.css', 'public/css','resources/sass/app.scss', [
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
        //
    ]);
