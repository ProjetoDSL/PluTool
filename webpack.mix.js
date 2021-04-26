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
  .js('node_modules/@fortawesome/fontawesome-free/js/solid.js', 'public/js/app.js')
  .js('node_modules/@fortawesome/fontawesome-free/js/fontawesome.js', 'public/js/app.js')
  .postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
  ])

mix.browserSync({
  proxy: 'localhost:8000',
  files: [
    'app/**/*',
    'resources/**/*'
  ]
});
