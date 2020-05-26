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
// js('resources/assets/js/app.js', 'public/js')
mix
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/baiviet.scss', 'public/css')
   .sass('resources/assets/sass/chitietbancapnhat.scss', 'public/css')
   .sass('resources/assets/sass/chitiettuong.scss', 'public/css')
   .sass('resources/assets/sass/cosodulieu.scss', 'public/css')
   .sass('resources/assets/sass/danhsachtuong.scss', 'public/css')
   .sass('resources/assets/sass/danhsachtrangbi.scss', 'public/css')
   .sass('resources/assets/sass/cachghepdo.scss', 'public/css')
   .sass('resources/assets/sass/doihinhchuan.scss', 'public/css')
   .sass('resources/assets/sass/style.scss', 'public/css')
   .sass('resources/assets/sass/trangchu.scss', 'public/css')
   .sass('resources/assets/sass/danhsachhe.scss', 'public/css');
