let mix = require('laravel-mix');

/*
 * 这里注意需要增加版本，不然有缓存，会导致vue模块不加载
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css').version();
if (mix.inProduction()) {
    mix.version();
} ;
