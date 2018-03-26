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

// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css');

// SITE
mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/flexslider/demo/css/flexslider.css',
    'resources/assets/site/css/style.css'
], 'public/css/site.css');

mix.scripts([
    // 'resources/assets/site/js/jquery-1.10.2.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/flexslider/demo/js/jquery.flexslider.js',
    // 'node_modules/scrollreveal/dist/scrollreveal.min.js',
    'node_modules/jquery.easing/jquery.easing.min.js',
    'resources/assets/site/js/custom.js'
], 'public/js/site.js');

mix.copy('node_modules/scrollreveal/dist/scrollreveal.min.js', 'public/js/scrollreveal.min.js');
mix.copy('resources/assets/site/img', 'public/site/img');

// AUTH

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/flexslider/demo/css/flexslider.css',
    'resources/assets/site/css/style.css'
], 'public/css/site.css');

mix.scripts([
    // 'resources/assets/site/js/jquery-1.10.2.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/flexslider/demo/js/jquery.flexslider.js',
    // 'node_modules/scrollreveal/dist/scrollreveal.min.js',
    'node_modules/jquery.easing/jquery.easing.min.js',
    'resources/assets/site/js/custom.js'
], 'public/js/site.js');

mix.copy('node_modules/scrollreveal/dist/scrollreveal.min.js', 'public/js/scrollreveal.min.js');
mix.copy('resources/assets/site/img', 'public/site/img');

// DASHBOARD
mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'resources/assets/dash/css/AdminLTE.min.css',
    'resources/assets/dash/css/skins/_all-skins.css'
], 'public/css/dash.css');

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/jquery-slimscroll/jquery.slimscroll.min.js',
    'node_modules/fastclick/lib/fastclick.js',
    'resources/assets/dash/js/adminlte.min.js'
], 'public/js/dash.js');

mix.copyDirectory('node_modules/ionicons', 'public/css/ionicons');
mix.copyDirectory('resources/assets/dash/img', 'public/dash/img');

// SHARED
mix.copyDirectory('node_modules/font-awesome', 'public/css/font-awesome');

// BrowserSync Reloading
mix.browserSync({
    proxy: 'walimu4ne.test'
});
