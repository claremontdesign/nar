var elixir = require('laravel-elixir');
elixir.config.srcDir = 'src';
elixir.config.cssOutput = '../../../public/assets/nar/templates/default/';
elixir.config.jsOutput = '../../../public/assets/nar/templates/default/';
elixir.config.assetDir = '/public/assets/nar/templates/default/';
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
	mix.copy('resources/assets/woocommerce', '../../../public/assets/nar/templates/default/plugins/woocommerce');
	mix.copy('resources/assets/font-awesome/fonts', '../../../public/assets/nar/templates/fonts');
	mix.copy('resources/assets/customrugs', '../../../public/assets/nar/templates/default/customrugs');
	mix.copy('resources/assets/swatches', '../../../public/assets/nar/templates/default/swatches');
	mix.copy('resources/assets/images', '../../../public/assets/nar/templates/default/images');
	mix.styles([
		'nhr.css'
	], '../../../public/assets/nar/templates/default/nar.css');
	mix.styles([
		'all.css'
	], '../../../public/assets/nar/templates/default/all.css');
	mix.scripts([
		'jquery.js'
	], '../../../public/assets/nar/templates/default/jquery.js');
	mix.scripts([
		'all.js'
	], '../../../public/assets/nar/templates/default/all.js');
});