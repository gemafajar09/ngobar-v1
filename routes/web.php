<?php

use Illuminate\Support\Facades\Route;
// use app dibawah sama fungsinya sebagai include pada php diamana kita menggabungkan file di directory berbeda unutk dijadikan 1 dalam satu file
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

// route memiliki beberapa method [get,post,put,delete]
// '/' ada url utama sedangkan controller yg berada di dalam array adalah class yang dimana akana mnegatur semua interaksi di dalam web
// ->name() berfungsi untuk inisialisasi url

Route::get('/',[LoginController::class, 'index'])->name('/');
Route::post('/login',[LoginController::class, 'login'])->name('login');
// 
Route::get('/home', [HomeController::class, 'index'])->name('/home');