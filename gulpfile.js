var elixir = require('laravel-elixir');

require('laravel-elixir-webpack-official');

elixir(function(mix) {
    mix.webpack('app.js');
});