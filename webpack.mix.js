let mix = require('laravel-mix');
let path = require('path');
require('./nova.mix');

mix.setPublicPath('dist')
    .js('resources/js/field.js', 'js')
    .sass('resources/sass/field.scss', 'dist/css')
    .webpackConfig({
        resolve: {
            symlinks: false,
        },
    })
    .vue({ version: 3 })
    .nova('davidpiesse/nova-audio');

mix.alias({
    'laravel-nova': path.join(__dirname, 'vendor/laravel/nova/resources/js/mixins/packages.js'),
    '@': path.join(__dirname, '../../vendor/laravel/nova/resources/js'),
});
