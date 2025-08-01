<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/todo', [UserController::class,'get'])->middleware(['auth', 'verified'])->name('todo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/create',[UserController::class,'create'])->name('todos.create');
// Route::post('/add',[UserController::class,'add'])->name('todos.add');
Route::post('/add',[UserController::class,'add'])->name('todos.add');
Route::get('/edit/{task}',[UserController::class,'edit'])->name('todos.edit');
Route::put('/update/{task}',[UserController::class,'update'])->name('todos.update');
Route::delete('/delete/{task}',[UserController::class,'delete'])->name('todos.delete');
require __DIR__.'/auth.php';
