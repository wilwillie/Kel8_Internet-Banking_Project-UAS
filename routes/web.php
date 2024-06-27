<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/deposit', [HomeController::class, 'deposit'])->name('deposit');
Route::post('/deposit', [HomeController::class, 'saveDeposit'])->name('saveDeposit');

Route::get('/transfer', [HomeController::class, 'transfer'])->name('transfer');
Route::post('/transfer', [HomeController::class, 'saveTransfer'])->name('saveTransfer');

Route::get('/withdraw', [HomeController::class, 'withdraw'])->name('withdraw');
Route::post('/withdraw', [HomeController::class, 'saveWithdraw'])->name('saveWithdraw');

Route::get('/statement', [HomeController::class, 'statement'])->name('statement');

Route::get('/customer-service', [CustomerServiceController::class, 'index'])->name('customer-service');

require __DIR__.'/auth.php';
