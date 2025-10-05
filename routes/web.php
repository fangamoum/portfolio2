<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/',[contactController::class, 'store'])->name('contact.store');
