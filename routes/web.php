<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index']);
    Route::get('list', [UserController::class, 'index']);
    Route::get('create', [UserController::class, 'create'])->name('users.create');
    Route::get('createPost', [UserController::class, 'createPost'])->name('users.createPost');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::get('update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');
});
