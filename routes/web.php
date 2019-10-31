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

// -- Home --
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

// -- Super Admin --
Route::get('/super-admin', function () {
    return view('superadmin/dashboard');
});

Route::get('/super-admin/dashboard', function () {
    return view('superadmin/dashboard');
});

Route::get('/super-admin/data-kecamatan', function () {
    return view('superadmin/data_kecamatan');
});

Route::get('/super-admin/data-ruas-jalan', function () {
    return view('superadmin/data_ruas_jalan');
});

Route::get('/super-admin/data-kondisi-jalan', function () {
    return view('superadmin/data_kondisi_jalan');
});

Route::get('/super-admin/data-kondisi-jembatan', function () {
    return view('superadmin/data_kondisi_jembatan');
});

Route::get('/super-admin/artikel', function () {
    return view('superadmin/artikel');
});

Route::get('/super-admin/galeri', function () {
    return view('superadmin/galeri');
});

Route::get('/super-admin/profil', function () {
    return view('superadmin/profil');
});

Route::get('/super-admin/user', function () {
    return view('superadmin/user');
});