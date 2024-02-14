<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
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

Route::get('site1/{name?}',[Site1Controller::class,'index'])
->name('site1.index');

Route::get('site2/new',[Site2Controller::class, 'index'])
->name('site2.index');

Route::prefix('site3')->name('site3.')->group(function() {
    Route::get('/',[Site3Controller::class, 'index'])
    ->name('index');
    Route::get('/about',[Site3Controller::class, 'about'])
    ->name('about');
    Route::get('/contact',[Site3Controller::class, 'contact'])
    ->name('contact');
    Route::get('/post',[Site3Controller::class, 'post'])
    ->name('post');
});