// webpack.mix.js

let mix = require( 'laravel-mix' );

mix
.js( 'resources/js/script.js', 'dist' ).setPublicPath( 'dist' )
.sass( 'resources/scss/style.scss', 'dist' ).setPublicPath( 'dist')
.autoload( {
    jquery: ['$', 'window.jQuery', 'jQuery'],
} );
