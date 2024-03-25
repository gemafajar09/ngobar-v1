<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('/');
    Route::get('/register', [LoginController::class, 'regis'])->name('register');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register-add', [LoginController::class, 'register'])->name('register-add');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'index'])->name('/home');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/add', [KategoriController::class, 'tambah'])->name('tambah-kategori');
    Route::post('/kategori/simpan', [KategoriController::class, 'simpan'])->name('simpan-kategori');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('edit-kategori');
    Route::patch('/kategori/{id}/update', [KategoriController::class, 'update'])->name('update-kategori');
    Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete'])->name('delete-kategori');
});





