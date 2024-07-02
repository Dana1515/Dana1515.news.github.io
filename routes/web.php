<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FormController;
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

Route::get('/', [MainController::class, 'main']);
Route::get('/news', [NewsController::class, 'news']);
Route::get('/form', [FormController::class, 'form']);
Route::get('/form', [FormController::class, 'users']);
Route::post('/form', [FormController::class, 'store'])->name('form.store');

