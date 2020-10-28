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
    return view('welcome');
});

Route::get('/index' , function () {
	return view('index');
});

Route::get('login' , function () {
	return view('login');
});

Route::get('/produk' , function () {
	return view('produk');
});

Route::get('/kategori' , function () {
	return view('kategori');
});

Route::get('/registrasi' , function () {
	return view('registrasi');
});

Route::get('/template' , function () {
	return view('template.base');
});

Route::get('rekomendasi' , function () {
	return view('rekomendasi');
});

Route::get('admin/beranda' , function () {
	return view('admin.beranda');
});

Route::get('admin/produk' , function () {
	return view('admin.produk');
});

Route::get('admin/kategori' , function () {
	return view('admin.kategori');
});

Route::get('admin/login' , function () {
	return view('admin.login');
});

Route::get('admin/registrasi' , function () {
	return view('admin.registrasi');
});

