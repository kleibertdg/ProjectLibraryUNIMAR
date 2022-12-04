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


Route::get('/adUser', function () {
    return view('adminUser');
});

Route::get('/adminUser', function () {
    return view('adminUser');
});

Route::get('/registerUser', function () {
    return view('registerUser');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/registerLibrary', function () {
    return view('registerLibrary');
});

Route::get('/registerExtra', function () {
    return view('registerExtra');
});

