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

mix.js('resources/assets/js/sourceacademy.js', 'public/js')
   .sass('resources/assets/sass/site.scss', 'public/css')
   .sass('resources/assets/sass/platform.scss', 'public/css')
   .sass('resources/assets/sass/vendor.scss', 'public/css')
   .version()
   .webpackConfig({
       resolve: {
           alias: {
               '@': path.resolve('resources/assets/sass')
            }
        }
    });
