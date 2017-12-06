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

Route::get('/über-mich/', 'Controller@überMich');

Route::get('/leistungen/', 'Controller@leistungen');

Route::get('/impressum/', 'Controller@impressum');

Route::get('/kontakt/', 'Controller@kontakt');

Route::get('/klassenraum/', 'Controller@blogOverview');

Route::get('/klassenraum/konkurrenz/', 'Controller@konkurrenz');

Route::get('/klassenraum/online-präsenz/', 'Controller@onlinePräsenz');

Route::get('/klassenraum/online-präsenz/potential-internetseite/', 'Controller@potentialInternetseite');

Route::get('/klassenraum/online-präsenz/soziale-medien/', 'Controller@sozialeMedien');

Route::post('/sendmail/', 'Controller@sendMail')->name('sendmail');

Route::post('/sendkursinfo/', 'Controller@sendkursinfo')->name('sendkursinfo');


Route::get('/cookie-test/', 'Controller@cookieTest');

Route::get('/output-cookie/', 'Controller@outputCookie');