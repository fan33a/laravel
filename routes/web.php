<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\FormsController;
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

Route::get('form1',[FormsController::class, 'form1'])
->name('forms.form1');
Route::post('form1',[FormsController::class, 'form1_data'])
->name('forms.form1_data');

Route::get('form2',[FormsController::class, 'form2'])
->name('forms.form2');
Route::post('form2',[FormsController::class, 'form2_data'])
->name('forms.form2_data');

Route::get('form3',[FormsController::class, 'form3'])
->name('forms.form3');
Route::post('form3',[FormsController::class, 'form3_data'])
->name('forms.form3_data');

Route::get('form4',[FormsController::class, 'form4'])
->name('forms.form4');
Route::post('form4',[FormsController::class, 'form4_data'])
->name('forms.form4_data');

Route::get('contact',[FormsController::class, 'contact'])
->name('forms.contact');
Route::post('contact',[FormsController::class, 'contact_data'])
->name('forms.contact_data');