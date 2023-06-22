<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\MainController;
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

/*Route::get('/main', function () {
    return view('index');
});*/
Route::get('main',[MainController::class,'load']);

Route::get('/basket', function () {
    return view('basket');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
}); 
//Route::get('brands',[TestController::class,'index']);