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
    return view('pocetna');
});

Auth::routes();

Route::get('/pocetna', function () {
	return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/novi-klijent', function () {
    return view('novi-klijent');
});


Route::get('/lista-korisnika', function () {
    $listaUsera = \App\User::orderBy('created_at', 'asc')->get();
    return view('lista-korisnika', [
        'users' => $listaUsera,
    ]);
});