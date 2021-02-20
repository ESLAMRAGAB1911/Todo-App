<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::get('/show/{id}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/create', [TodoController::class, 'store']);
Route::get('/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::get('/{id}/delete', [TodoController::class, 'delete'])->name('todo.delete');
Route::get('/{id}/status', [TodoController::class, 'status'])->name('todo.status');
Route::get('/{id}/status2', [TodoController::class, 'status2'])->name('todo.status2');
