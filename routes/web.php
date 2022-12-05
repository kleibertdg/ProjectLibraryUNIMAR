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

Route::get('/', function () {return view('loginVista');})->name('LoginUser');

Route::get('/RegistroUser', function () {return view('registroVista');})->name('RegistroUser');

Route::get('/Catalago', function () {return view('Catalago');})->name('Catalago');

Route::get('/home', function () {return view('home');})->name('home');
