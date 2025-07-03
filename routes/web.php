<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/add', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/add', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/{id}', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}', [BookController::class, 'update'])->name('books.update');
    Route::get('/books/sil/{id}', [BookController::class, 'delete'])->name('books.delete');
});

require __DIR__.'/auth.php';
