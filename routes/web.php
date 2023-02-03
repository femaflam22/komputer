<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

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

Route::get('/', [ComputerController::class, 'index'])->name('index');
Route::get('/create', [ComputerController::class, 'create'])->name('create');
Route::post('/store', [ComputerController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ComputerController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [ComputerController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ComputerController::class, 'delete'])->name('delete');
