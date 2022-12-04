<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MilkReceptionController;
use App\Models\invoice;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

// clients
Route::get('/client', [App\Http\Controllers\ClientsController::class, 'index'])->name('client');
Route::post('/client/store', [App\Http\Controllers\ClientsController::class, 'store'])->name('client_store');
Route::get('/client/show/{id}', [App\Http\Controllers\ClientsController::class, 'show'])->name('client_show');
// milk_reception
Route::post('/milk_reception/store', [App\Http\Controllers\MilkReceptionController::class, 'store'])->name('milk_store');
Route::get('/milk_reception', [App\Http\Controllers\MilkReceptionController::class, 'index'])->name('milk_reception');

//  invoice
Route::get('/invoice/{id}', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice');





// eror
Route::get('/client/edit/{id}', [App\Http\Controllers\ClientsController::class, 'edit'])->name('client_edit');
Route::post('/client/create', [App\Http\Controllers\ClientsController::class, 'create'])->name('client_create');

Route::get('/milk_reception/show/{id}', [App\Http\Controllers\MilkReceptionController::class, 'show'])->name('milk_show');

Route::get('/milk_reception/edit/{id}', [App\Http\Controllers\MilkReceptionController::class, 'edit'])->name('milk_edit');

Route::post('/milk_reception/create', [App\Http\Controllers\MilkReceptionController::class, 'create'])->name('milk_create');
