<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


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

Route::resource('/books', App\Http\Controllers\BookController::class);

// Route:get('/home', [BookController::class, 'show'])->name('book.show');
// Route:get('/book/index', [BookController::class, 'index'])->name('book.index');
// Route:post('/book/insert', [BookController::class, 'create'])->name('book.create');
