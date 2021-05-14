var elixir = require ('laravel-elixir');
var gulp  = require('gulp') ;


elixir.config.sourcemaps = false;

elixir(function (mix){
//convert from sass to css
mix.sass('resources/assets/sass/app.scss', 'resources/assets/css');

mix.styles([

'css/app.css',
 './node_modules/slick-carousel/slick/slick.css'

],'public/css/build.css',
'resources/assets');

mix.scripts(

[
    //jquery
    './node_modules/jquery/dist/jquery.min.js',
    //MDbootstrap
    './node_modules/mdbootstrap/js/mdb.min.js',

    //boostrap
    './node_modules/bootstrap/dist/js/bootstrap.min.js',

    //slick coruousel
    './node_modules/slick-carousel/slick/slick.min.js',
    //popper
    "./node_modules/popper.js/dist/popper.min.js",
    
    //compile all
    'js/*.js',



],'public/js/build.js','resources/assets');

});

