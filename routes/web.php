<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soulaimane', function () {
    return view('welcome');
});

Route::get('/hajar', function () {
    return view('Hajar');
});

Route::patch('/addBook', function (Request $request) {
    // return view('Hajar');
});


