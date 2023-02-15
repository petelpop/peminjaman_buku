<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () { return view('welcome'); });
Route::get('/pinjam/create', [BookController::class, 'create']);
Route::get('/pinjam', [BookController::class, 'index']);
Route::get('/pinjam/{id}', [BookController::class, 'show']);
Route::post('/pinjam', [BookController::class, 'store']);
Route::get('/pinjam/{id}/edit', [BookController::class, 'edit']);
Route::patch('/pinjam/{id}', [BookController::class, 'update']);
Route::delete('/pinjam/{id}', [BookController::class, 'delete']);

