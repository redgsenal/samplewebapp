var elixir = require('laravel-elixir');
var del = require('del');
var task = elixir.Task;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.extend('del', function(path) {
    new task('del', function() {
        console.log(`Current directory: ${process.cwd()}`); //for debug, remove this if you don't want
        console.log('delete path: ' + path);
        return del(path);
    });
});

elixir(function(mix) {
	var nodemods = '../../../node_modules';
	mix.del([ 'public/css', 'public/js', 'public/fonts', 'public/images' ]);	
    mix.sass('app.scss', 'public/css/main.css');
    mix.scripts(['jquery.min.js', 
                 nodemods + '/bootstrap-sass/assets/javascripts/bootstrap.min.js',
                 'plugins.js',
                 'main.js'],
                 'public/js/main.js');
    mix.copy('node_modules/bootstrap-sass/assets/fonts', 'public/css/fonts');
    mix.copy('resources/assets/images', 'public/images');
});
