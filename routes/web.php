<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

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

Route::get('/', function () { return view('index');})->name('index');

Route::get( '/books' , [bookController::class, 'index']) ->name('books.index');
Route::get('/books/create' , [bookController::class , 'create']) ->name('books.create');
Route::post('/books/store' , [bookController::class , 'store'])->name('books.store');
Route::get('/books/{book}/edit' , [bookController::class , 'edit'])->name('books.edit');
Route::put('/books/{book}',[bookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [bookController::class, 'destroy'])->name('books.destroy');
