<?php

use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/books/{book:id}', [BookController::class, 'show']);
Route::get('admin/books/create', [AdminBookController::class, 'create']);
Route::post('admin/books', [AdminBookController::class, 'store']);
Route::get('/books/{book:id}/reserve', [ReservationController::class, 'create']);
Route::post('books/reservations', [ReservationController::class, 'store']);
