<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     $books=DB::table('books')->get();
     return view("home",compact('books'));
    // return view('home');
});

Route::get('/home', [BookController::class, 'indexbook']);
// Route::get('/bookdetails/{id}', [BookController::class, 'show'])->name('bookdetail.show');
Route::middleware(['auth'])->group(function () {
    Route::get('/bookdetails/{id}', [BookController::class, 'show'])->name('bookdetail.show');
});

Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/insert', [BookController::class, 'insert']);
Route::get('/books/edit/{id}', [BookController::class, 'edit']);
Route::post('/books/update/{id}', [BookController::class, 'update']);
Route::get('/books/delete/{id}', [BookController::class, 'delete']);
Route::Post('/books/delete/all', [BookController::class, 'deleteAll']);
});









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
