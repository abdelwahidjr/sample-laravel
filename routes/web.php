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


Route::get('/loaderio-7cafbc0ea52e4703c40750d063e4a5b1', function () {
    return 'loaderio-7cafbc0ea52e4703c40750d063e4a5b1';
});

