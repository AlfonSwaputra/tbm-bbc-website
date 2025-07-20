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

Route::get('/', function () {
    return view('index');
})->name('beranda');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/mitra', function () {
    return view('mitra');
})->name('mitra');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/literasi', function () {
    return view('literasi');
})->name('literasi');

Route::get('/muda', function () {
    return view('muda');
})->name('muda');

Route::get('/puan', function () {
    return view('puan');
})->name('puan');

Route::get('/festival', function () {
    return view('festival');
})->name('festival');

Route::get('/event', function () {
    return view('event');
})->name('event');

Route::get('/ramadhan', function () {
    return view('ramadhan');
})->name('ramadhan');