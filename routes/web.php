<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Landing');
})->name('home');

Route::post('/form-submit', [FormController::class, 'submit'])->name('form-submit');


Route::get('/thankyou', function () {
    return Inertia::render('ThankYou');
})->name('thankyou');
