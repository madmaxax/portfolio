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
Route::get('/', function () {
    return view('extends.landing');
});
Route::get('/blog', function () {
    return view('extends.blog');
});
Route::get('/kontakt', function () {
    return view('extends.contactForm');
});
Route::post('/sendmail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
	$mailer
		->to('maximilian.muza@gmx.de')
		->send(new \App\Mail\MyMail($request->input('name'), $request->input('mail'), $request->input('nachricht')));
	return redirect()->back();
})->name('sendmail');