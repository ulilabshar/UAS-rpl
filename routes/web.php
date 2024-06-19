<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeNumberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/date-form', function () {
    return view('date-form');
});

Route::get('/', [PrimeNumberController::class, 'index']);
Route::post('/find-primes', [PrimeNumberController::class, 'findPrimes'])->name('find.primes');

