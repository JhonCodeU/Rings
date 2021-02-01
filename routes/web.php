<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RingController;
use App\Http\Controllers\SendEmailController;
use App\Models\Category;

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
Route::get('/', [CategoryController::class, 'index']);

// contreller type resourse
Route::resource('/rings',RingController::class );
Route::resource('/categories',CategoryController::class )->middleware('auth');

Route::get('/categoriesList', [CategoryController::class, 'list'])->middleware('auth');

//contactanos email
Route::get('/contact', [SendEmailController::class, 'index'])->name('contact.index');

Route::post('/contact', [SendEmailController::class, 'store'])->name('contact.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
