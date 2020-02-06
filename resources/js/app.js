/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

// Este archivo es tomado por laravel mix, para compilar su contenido y enviarlo como un bundle final
// a public/js/app.js
// Por ello, es un buen punto de partida para incluir otros archivos de script que se necesitan compilar
// para enviarse junto al bundle final
require('./site');
