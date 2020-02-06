const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

// Requerir BrowserSync para recargar el navegador automáticamente al hacer un cambio.
// Recordar que cada cambio se genera gracias a la compilación de los assets,
// por ello es necesario ejecutar el comando npm run watch
mix.browserSync('http://127.0.0.1:8000');

// En producción siempre es necesario generar versiones de nuestros assets compilados
// ya que el navegador guarda en cache los archivos para mejorar la carga del sitio,
// siendo necesario en ocasiones hacer una actualización forzada con CTRL + F5 para ver dichos cambios.
// cosa que los usuarios no saben, y provocaría que no gozaran de los cambios generados.
if(mix.inProduction())
{
    mix.version();
    // Ahora, laravel mix genera un archivo de manifiesto .json con la relación de estos archivos.
    // cuyo valor es el path y nombre(+version) de los archivos generados
}
