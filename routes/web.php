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

Route::get('/dashboard_pegawai', function () {
    return view('pegawai.dashboard_pegawai');
});

Route::get('/edit_profil', function () {
    return view('pegawai.edit_profil');
});

Route::get('/profil_diri', function () {
    return view('pegawai.profil_diri');
});

Route::get('/status_pengajuan', function () {
    return view('pegawai.statuspengajuan');
});