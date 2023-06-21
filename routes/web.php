<?php

use App\Http\Controllers\TopController;
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

Route::get('/', [TopController::class, 'index'])->name('index');
Route::post('/store', [TopController::class, 'store'])->name('store');

// Route::get('/', function () {
//     return view('welcome');
// });