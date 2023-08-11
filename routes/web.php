<?php

use App\Http\Controllers\MainController;
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

Route::get('/', function () {return redirect('login');});
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/authenticate', [MainController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::post('/register', [MainController::class, 'store'])->name('register');