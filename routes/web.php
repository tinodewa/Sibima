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
    return view('welcome');
});

Route::get('/sibima/sikombatan', function () {
    return view('sikombatan');
});

Route::get('/sibima/sikombatan-detail', function () {
    return view('sikombatan-detail');
});

Route::get('/sibima/sikalan', function () {
    return view('sikalan');
});

Route::get('/sibima/sikalan-detail', function () {
    return view('sikalan-detail');
});

Route::get('/sibima/artikel', function () {
    return view('artikel');
});

Route::get('/sibima/artikel-detail', function () {
    return view('artikel-detail');
});

Route::get('/sibima/galery', function () {
    return view('galery');
});

Route::get('/sibima/bilik-laporan', function () {
    return view('bilik_laporan');
});

Route::get('/sibima/profil', function () {
    return view('profil');
});