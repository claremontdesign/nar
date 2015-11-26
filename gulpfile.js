var elixir = require('laravel-elixir');
elixir.config.assetDir = 'resources/assets';
/*
 *
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(function(mix) {
	mix.copy('resources/assets/', '../../../public/assets/nar/templates/');
});