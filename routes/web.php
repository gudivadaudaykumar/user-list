<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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


Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::post('create-user', [UserController::class, 'store'])->name('users.store');
Route::get('user-info/{id}', [UserController::class, 'userInfo'])->name('users.userInfo');
Route::post('edit-user', [UserController::class, 'update'])->name('users.update');
