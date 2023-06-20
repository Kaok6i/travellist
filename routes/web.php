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
    return view('index');
});
Route::get('/basket', function () {
    return view('basket');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/contacts', function () {
    return view('contacts');
});