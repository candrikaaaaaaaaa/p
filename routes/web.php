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

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
