<?php

use App\Http\Controllers\AuthController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'processLogin'])->name('auth.processLogin');
    Route::get('/register', [AuthController::class, 'processRegister'])->name('auth.processRegister');
});

Route::middleware(['auth'])->group(function () {

});
