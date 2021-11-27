<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome'); //memanggil file yang ada di resource/views
// });

// Route::get('/', function () {
//     return view('home'); langsung mengembalikan apa yang di set di dalam return
// });

Route::get('latihan1', function () {
    return view('latihanview.latihan1');
});

Route::get('latihan1', function () {
    return view('latihanview.latihan1');
})->name('latihan1');

Route::get('latihan2', function () {
    return view('latihanview.latihan2');
})->name('latihan2');

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->name('/');

Route::get('home', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('latihan3', function () {
    return view('latihanview.latihan2');
});

Route::get('latihan4', function () {
    return view('latihanview.latihan1');
});

Route::get('about', function () {
    return view('about', [
        "title" => "About"
    ]);
})->name('about');

Route::get('contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
})->name('contact');
