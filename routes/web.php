<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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


Route::middleware('isGuest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('store');
    Route::post('/auth', [UserController::class, 'auth'])->name('auth');
});

Route::middleware('isLogin', 'cekRole:admin')->group(function () {
    Route::get('/todo/users', [UserController::class, 'users'])->name('users');
});
Route::middleware('isLogin', 'cekRole:admin,user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/profile/edit/{id}', [UserController::class, 'edit'])->name('editprofile');
    // Route::get('/', [TodoController::class, 'home'])->name('home');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/', [TodoController::class, 'index'])->name('dashboard');
});


Route::middleware('isLogin', 'cekRole:user')->group(function () {
    Route::get('/create', [TodoController::class, 'add'])->name('add');
    Route::get('/selesai', [TodoController::class, 'done'])->name('done');
    Route::post('/add/todo', [TodoController::class, 'store'])->name('addtodo');
    Route::delete('/delete/{id}', [TodoController::class, 'destroy'])->name('delete');
    Route::delete('/done/delete/{id}', [TodoController::class, 'done_destroy'])->name('done.delete');
    Route::get('/todo/update/{id}', [TodoController::class, 'update_done'])->name('updatetodo');
    Route::get('/todo/undo/{id}', [TodoController::class, 'undo'])->name('undo');
    Route::get('/todo/edit/{id}', [TodoController::class, 'edit'])->name('edit');
    Route::patch('/todo/edit/update/{id}', [TodoController::class, 'update'])->name('update');
});

Route::get('/error', function () {
    return view('error');
})->name('error');