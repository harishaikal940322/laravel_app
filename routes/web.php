<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/client/index', [App\Http\Controllers\ClientsController::class, 'index'])->name('client.index');
Route::get('/client/create', [App\Http\Controllers\ClientsController::class, 'create'])->name('client.create');
Route::get('/client/{id}/edit', [App\Http\Controllers\ClientsController::class, 'edit'])->name('client.edit');
Route::get('/client/store', [App\Http\Controllers\ClientsController::class, 'store'])->name('client.store');
Route::get('/client/{id}/update', [App\Http\Controllers\ClientsController::class, 'update'])->name('client.update');

