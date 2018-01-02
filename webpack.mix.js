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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copyDirectory(['node_modules/bootstrap/'], 'public/css/bootstrap/')
    .copyDirectory(['node_modules/font-awesome/'], 'public/css/font-awesome/')
    .copyDirectory(['node_modules/datatables-responsive/'], 'public/css/datatables-responsive/')
    .copyDirectory(['node_modules/datatables.net-plugins/'], 'public/css/datatables.net-plugins/')
    .copyDirectory(['node_modules/metismenu/'], 'public/css/metismenu/');

mix.copyDirectory(['node_modules/jquery/'], 'public/js/jquery/')
    .copyDirectory(['node_modules/bootstrap/'], 'public/js/bootstrap/')
    .copyDirectory(['node_modules/metismenu/'], 'public/js/metismenu/')
    .copyDirectory(['node_modules/datatables/'], 'public/js/datatables/')
    .copyDirectory(['node_modules/datatables.net-plugins/'], 'public/js/datatables.net-plugins/');

mix.copyDirectory(['resources/assets/admin/css'], 'public/admin/css/');
mix.copyDirectory(['resources/assets/admin/img'], 'public/avatars/');

//client
mix.copyDirectory(['resources/assets/js/template_user/'], 'public/js/client-js/');
mix.copyDirectory(['resources/assets/css/'], 'public/css/client-css/');
mix.copyDirectory(['resources/assets/img/'], 'public/img/');
