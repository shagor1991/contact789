<?php

use Illuminate\Support\Facades\Route;
use Shagor\ContactA2Z\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/submit', [ContactController::class, 'submit']);