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

Route::resource('projects', 'ProjectController');
Route::resource('messages', 'MessageController');
