<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
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


Route::get('/chi-sono', function () {
    return view('chi-sono');
});



Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact', [ContactController::class, 'showForm'])->name('show.contact');
Route::post('/inviaemail', [ContactController::class, 'submitForm'])->name('submit.contact');
Route::get('/servizi', [ServiceController::class, 'index']);