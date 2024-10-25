<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/thankyou', function () {
    return view('thanks');
})->name('thanks');

Route::post('/reservation', [ReservationController::class, 'send'])->name('reservation');
