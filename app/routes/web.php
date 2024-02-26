<?php

use App\Http\Controllers\PaymentController;
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

Route::any('/eRegistration', [PaymentController::class, 'index'])->name('register');
Route::post('/pay', [PaymentController::class, 'initialize'])->name('pay');
Route::get('/rave/callback', [PaymentController::class, 'callback'])->name('callback');