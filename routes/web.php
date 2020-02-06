<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'pages.home')->name('pages.home');
Route::view('/about', 'pages.about')->name('pages.about');
Route::get('contact', 'ContactController')->name('pages.contact');

// Route::resource('projects', 'ProjectController');

// Este controlador de recursos tiene una personalización que rompe con la convención tradicional de laravel. Esto puede ser importante si necesitamos que nuestras rutas esten en Spanish (frontend) English (backend)
// La URL comienza con proyectos
// Sus nombres de rutas comienzan con el prefijo projects.(index|show|create|store|edit|update|destroy)
// Su parámetro de ruta es {project}
Route::resource('proyectos', 'ProjectController')
    ->names('projects')
    ->parameters(['proyectos' => 'project']);
//
Route::resource('messages', 'MessageController');
