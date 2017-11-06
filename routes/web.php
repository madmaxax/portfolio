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
Route::get('/', 'Controller@landing');
Route::get('/kontakt/', 'Controller@kontakt');
Route::get('/blog/', 'Controller@blogOverview');
Route::get('/blog/{blogURL}/', 'Controller@viewBlogPost');
Route::post('/sendmail/', 'Controller@sendMail')->name('sendmail');