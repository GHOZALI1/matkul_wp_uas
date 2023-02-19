<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

Route::get('/daftarbuku', [App\Http\Controllers\UserController::class, 'daftarbuku'])->name('daftarbuku');

Route::get('/detailbuku/{id_buku}', [App\Http\Controllers\UserController::class, 'detailbuku'])->name('detailbuku');

Route::get('/sewa', [App\Http\Controllers\UserController::class, 'sewa']);



Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::get('/tambahbuku', [App\Http\Controllers\AdminController::class, 'tambahbuku'])->name('tambah buku');

Route::get('/editbuku', [App\Http\Controllers\AdminController::class, 'editbuku'])->name('edit buku');

Route::get('/databuku/{id_buku}', [App\Http\Controllers\AdminController::class, 'editdata']);

Route::post('/store',  [App\Http\Controllers\AdminController::class, 'store']);

Route::patch('/update/{id_buku}',  [App\Http\Controllers\AdminController::class, 'update']);