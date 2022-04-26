<?php

use App\Http\Controllers\CustomersController;
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

Route::get('/mane', [CustomersController::class, 'index'])->name('index');

Route::get('/mane/create', [CustomersController::class, 'create'])->name('create');

Route::post('/mane', [CustomersController::class, 'store'])->name('add');

Route::get('/{id}', [CustomersController::class, 'show'])->name('show');

Route::post('/{id}/edit', [CustomersController::class, 'edit'])->name('edit');

Route::delete('/mane/{id}', [CustomersController::class, 'destroy'])->name('destroy');


// Route::resource('/', CustomersController::class);