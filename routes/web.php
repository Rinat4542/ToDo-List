<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\List_;

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

Route::controller(TasksController::class)->group(function(){
    Route::post('/tasks', [TasksController::class, 'create'])->name('tasks.create');
    Route::post('/tasks/{task}', [TasksController::class, 'delete'])->name('tasks.delete');
    Route::get('/tasks/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
    Route::get('/tasks', [TasksController::class, 'show'])->name('tasks.show');
});


Route::controller(EditController::class)->group(function(){
    Route::post('/tasks/{task}/update', [EditController::class, 'update'])->name('tasks.update');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'action'])->name('login.action');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'action'])->name('register.action');
});
