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


Route::get('/loaderio-e13447fe338db2e1432cd6f48ed4c8d4', function () {
    return 'loaderio-e13447fe338db2e1432cd6f48ed4c8d4';
});

