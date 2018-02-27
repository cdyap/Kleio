const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

require('laravel-elixir-webpack-official');
Elixir.webpack.config.module.loaders = [];
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .version('css/app.css')
       .scripts([
            'main.js'       // your custom js file located in default location: /resources/assets/js/
       ], 'public/js/app.js')
       .version([             // optionally append versioning string to filename
            'js/app.js'
      ]).browserify('app.js');
});
