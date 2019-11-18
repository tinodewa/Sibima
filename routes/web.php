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

// ROUTE HOME
Route::get('/', function () {
    return view('index');
});

Route::prefix('sibima')->group(function () {
    Route::get('/', 'Home\HomeController@index')->name('sibima.home');

    Route::get('sikombatan', 'Home\HomeController@sikombatan')->name('sibima.sikombatan');
    Route::get('sikombatan/{name}', 'Home\HomeController@sikombatanDetail')->name('sibima.sikombatan.detail');

    Route::get('sikalan', 'Home\HomeController@sikalan')->name('sibima.sikalan');
    Route::get('sikalan/{name}', 'Home\HomeController@sikalanDetail')->name('sibima.sikalan.detail');

    Route::get('artikel', 'Home\HomeController@artikel')->name('sibima.artikel');
    Route::get('artikel/{name}', 'Home\HomeController@artikelDetail')->name('sibima.artikel.detail');

    Route::get('galeri', 'Home\HomeController@galeri')->name('sibima.galeri');
    Route::get('bilik-laporan', 'Home\HomeController@bilikLaporan')->name('sibima.bilik_laporan');
    Route::get('profil', 'Home\HomeController@profil')->name('sibima.profil');
});

// ROUTE ADMIN
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.home');
    
    Route::get('provinsi', 'Admin\ProvinsiController@index')->name('admin.provinsi');
    Route::get('provinsi/buat', 'Admin\ProvinsiController@create')->name('admin.provinsi.create');
    Route::post('provinsi/store', 'Admin\ProvinsiController@store')->name('admin.provinsi.store');
    Route::get('provinsi/edit/{id}', 'Admin\ProvinsiController@edit')->name('admin.provinsi.edit');
    Route::put('provinsi/edit/{id}', 'Admin\ProvinsiController@update')->name('admin.provinsi.update');
    Route::delete('provinsi/delete/{id}', 'Admin\ProvinsiController@destroy')->name('admin.provinsi.destroy');
    
    Route::get('kabupaten-kota', 'Admin\KabkotaController@index')->name('admin.kabkota');
    Route::get('kabupaten-kota/buat', 'Admin\KabkotaController@create')->name('admin.kabkota.create');
    Route::post('kabupaten-kota/store', 'Admin\KabkotaController@store')->name('admin.kabkota.store');
    Route::get('kabupaten-kota/edit/{id}', 'Admin\KabkotaController@edit')->name('admin.kabkota.edit');
    Route::put('kabupaten-kota/edit/{id}', 'Admin\KabkotaController@update')->name('admin.kabkota.update');
    Route::delete('kabupaten-kota/delete/{id}', 'Admin\KabkotaController@destroy')->name('admin.kabkota.destroy');

    Route::get('kondisi-jalan', 'Admin\SikalanController@index')->name('admin.sikalan');
    Route::get('kondisi-jalan/buat', 'Admin\SikalanController@create')->name('admin.sikalan.create');
    Route::get('kondisi-jalan/{id}', 'Admin\SikalanController@show')->name('admin.sikalan.show');
    Route::post('kondisi-jalan/store', 'Admin\SikalanController@store')->name('admin.sikalan.store');
    Route::get('kondisi-jalan/edit/{id}', 'Admin\SikalanController@edit')->name('admin.sikalan.edit');
    Route::put('kondisi-jalan/edit/{id}', 'Admin\SikalanController@update')->name('admin.sikalan.update');
    Route::delete('kondisi-jalan/delete/{id}', 'Admin\SikalanController@destroy')->name('admin.sikalan.destroy');

    Route::get('kondisi-jembatan', 'Admin\SikombatanController@index')->name('admin.sikombatan');
    Route::get('kondisi-jembatan/buat', 'Admin\SikombatanController@create')->name('admin.sikombatan.create');
    Route::get('kondisi-jembatan/{id}', 'Admin\SikombatanController@show')->name('admin.sikombatan.show');
    Route::post('kondisi-jembatan/store', 'Admin\SikombatanController@store')->name('admin.sikombatan.store');
    Route::get('kondisi-jembatan/edit/{id}', 'Admin\SikombatanController@edit')->name('admin.sikombatan.edit');
    Route::put('kondisi-jembatan/edit/{id}', 'Admin\SikombatanController@update')->name('admin.sikombatan.update');
    Route::delete('kondisi-jembatan/delete/{id}', 'Admin\SikombatanController@destroy')->name('admin.sikombatan.destroy');

    Route::get('artikel', 'Admin\ArtikelController@index')->name('admin.artikel');
    Route::get('artikel/buat', 'Admin\ArtikelController@create')->name('admin.artikel.create');
    Route::get('artikel/{id}', 'Admin\ArtikelController@show')->name('admin.artikel.show');
    Route::post('artikel/store', 'Admin\ArtikelController@store')->name('admin.artikel.store');
    Route::get('artikel/edit/{id}', 'Admin\ArtikelController@edit')->name('admin.artikel.edit');
    Route::put('artikel/edit/{id}', 'Admin\ArtikelController@update')->name('admin.artikel.update');
    Route::delete('artikel/delete/{id}', 'Admin\ArtikelController@destroy')->name('admin.artikel.destroy');

    Route::get('galeri', 'Admin\GaleriController@index')->name('admin.galeri');
    Route::get('galeri/buat', 'Admin\GaleriController@create')->name('admin.galeri.create');
    Route::post('galeri/store', 'Admin\GaleriController@store')->name('admin.galeri.store');
    Route::get('galeri/edit/{id}', 'Admin\GaleriController@edit')->name('admin.galeri.edit');
    Route::put('galeri/edit/{id}', 'Admin\GaleriController@update')->name('admin.galeri.update');
    Route::delete('galeri/delete/{id}', 'Admin\GaleriController@destroy')->name('admin.galeri.destroy');

    Route::get('profil', 'Admin\ProfilController@index')->name('admin.profil');
    Route::get('profil/buat', 'Admin\ProfilController@create')->name('admin.profil.create');
    Route::post('profil/store', 'Admin\ProfilController@store')->name('admin.profil.store');
    Route::get('profil/edit/{id}', 'Admin\ProfilController@edit')->name('admin.profil.edit');
    Route::put('profil/edit/{id}', 'Admin\ProfilController@update')->name('admin.profil.update');
    Route::delete('profil/delete/{id}', 'Admin\ProfilController@destroy')->name('admin.profil.destroy');

    Route::get('users', 'Admin\UserController@index')->name('admin.users');
    Route::get('users/buat', 'Admin\UserController@create')->name('admin.users.create');
    Route::get('users/{id}', 'Admin\UserController@show')->name('admin.users.show');
    Route::post('users/store', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('users/edit/{id}', 'Admin\UserController@edit')->name('admin.users.edit');
    Route::put('users/edit/{id}', 'Admin\UserController@update')->name('admin.users.update');
    Route::delete('users/delete/{id}', 'Admin\UserController@destroy')->name('admin.users.destroy');

});
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');