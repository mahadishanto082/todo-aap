<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

   

Route::get('todo', [TodoController::class, 'index'])
        ->middleware(['auth'])
        ->name('todo');


Route::get('todo.create',[TodoController::class, 'create']) 
        ->middleware(['auth'])
        ->name('create');
  Route::post('todo.store',[TodoController::class, 'store']) 
        ->middleware(['auth'])
        ->name('store');
Route::get('edit/{id}',[TodoController::class,'edit'])
        ->middleware(['auth'])
        ->name('edit');
Route::delete('todo/{id}', [TodoController::class, 'delete'])
        ->middleware(['auth'])
        ->name('todo.delete');
Route::get('view/{id}',[TodoController::class,'view'])
        ->middleware(['auth'])
        ->name('view');
Route::put('todo.update',[TodoController::class,'update'])
        ->middleware(['auth'])
        ->name('update');
require __DIR__.'/auth.php';
