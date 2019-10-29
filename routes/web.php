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
    return view('home/welcome');
});

Route::get('/sibima/sikombatan', function () {
    return view('home/sikombatan');
});

Route::get('/sibima/sikombatan-detail', function () {
    return view('home/sikombatan-detail');
});

Route::get('/sibima/sikalan', function () {
    return view('home/sikalan');
});

Route::get('/sibima/sikalan-detail', function () {
    return view('home/sikalan-detail');
});

Route::get('/sibima/artikel', function () {
    return view('home/artikel');
});

Route::get('/sibima/artikel-detail', function () {
    return view('home/artikel-detail');
});

Route::get('/sibima/galery', function () {
    return view('home/galery');
});

Route::get('/sibima/bilik-laporan', function () {
    return view('home/bilik_laporan');
});

Route::get('/sibima/profil', function () {
    return view('home/profil');
});